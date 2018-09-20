<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Consignee;
use App\Document;
use App\Transaction;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use GuzzleHttp;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\In;
use SanderVanHooft\Invoicable\Invoice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $docs;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.Main');
//        if (Gate::allows('admin-only', auth()->user())) {
//            return view('client.Main');
//        }
//        return 'askdkajsdkjasd';
    }

    public function showAbout()
    {
        return view('client.about');
    }

    public function showLocation()
    {
        return view('client.location');
    }
    public function account(Client $client)
    {
        try {
            $this->authorizeForUser(Auth::user(), 'confirm', [$client]);
            $clients = Client::findOrFail($client)->first();
            return view('client.clientaccount', compact('clients'));
        } catch (AuthorizationException $e) {
            return $e;
        }


    }
    public function clientRequest()
    {
//        $clients = Client::findOrFail(Auth::user()->client_id)->first();
//        return $clients;
        return view('client.quote', compact('clients'));
    }
    public function clientStatus(Client $client)
    {
        try {
            $this->authorizeForUser(Auth::user(), 'confirm', [$client]);
            $clients = Client::findOrFail($client)->first();
            $request = Transaction::with('destination','origin','quotation','goods','invoices','consignee')->where('client_id', $clients->id)->where('status_id', '!=',1)->get();


            return view('client.clientStatus', compact('request', 'clients'));
        } catch (AuthorizationException $e) {
            return $e;
        }
    }

    public function showImport()
    {
        return view('client.import');
    }
    public function showExport()
    {
        return view('client.export');
    }
    public function showDomestic()
    {
        return view('client.domestic');
    }
    public function calculator()
    {
        return view('client.calculator');
    }

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['confirm','account','clientStatus']]);
    }
    /**
     * @param Transaction $transaction
     * @param Client $client
     * @param Invoice $invoice
     * @return string
     * @throws AuthorizationException
     */
    public function confirm($transaction,$invoice, Client $client )
    {

//        if (Gate::allows('admin-only', [auth()->user(),'client','transaction', 'invoice'])) {
//            $quote = Transaction::with('destination','origin','quotation','goods')->where('transact', $transact)->get();
//
//            echo json_encode($quote);
//
//        }
        try {
            $this->authorizeForUser(Auth::user(), 'confirm', [$client]);
            $client = Client::findOrFail(3);
            $quote = Transaction::with('destination','origin','quotation','goods','consignee','documents')->where('transact', $transaction)->first();
            $rate = Invoice::with('lines')->where('reference', $invoice)->first();
            $base = new GuzzleHttp\Client([
                'base_uri' => 'http://data.fixer.io/',
            ]);
            $response = $base->request('GET', 'api/latest?access_key=' . env('FIXER_API_KEY') . '&symbols=PHP,USD,JPY,GBP,AUD,CHF,CAD,MXN,CNY,NZD&format=1');
            $response_data = json_decode($response->getBody()->getContents());
            $peso = $base->request('GET', 'api/latest?access_key=' . env('FIXER_API_KEY') . '&symbols=PHP&format=1');
            $peso_data = json_decode($peso->getBody()->getContents());
            foreach ($response_data as $currency) {
                $rates[] = $currency;
            }
            foreach ($peso_data->rates as $peso_rate){
                $pesos = $peso_rate;
            }
            $default = $base->request('GET', 'api/latest?access_key=' . env('FIXER_API_KEY') . '&symbols='.$quote->goods->currency.'&format=1');
            $gbp = json_decode($default->getBody()->getContents());
            foreach ($gbp->rates as $gbp_rate){
                $gbps = $gbp_rate;
            }
            if($consign = $quote->consignee){
                $docu = $quote->documents;
            }
            return view('client.confirm', compact('quote', 'rate', 'client','pesos','gbps','consign','docu'));
        } catch (AuthorizationException $e) {
            return view('errors.503');
        }


    }


    public function finish(Request $request){

        $consignee = Consignee::create([
            'firstName' => $request->fname,
            'lastName' => $request->lname,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zip' => $request->zip,
            'postal' => $request->postal,
        ]);

            $transact = Transaction::findOrFail($request->transactId);
            $transact->consignee_id = $consignee->id;
            $transact->save();


    }
    public function imageUpload($id){
        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);
        $this->docs = Document::create([
            'file'=>$imageName,
            'transaction_id'=>$id,
        ]);
        return response()->json(['uploaded' => '/upload/'.$imageName]);
    }

    public function receivedBill()
    {
        return view('client.receivedBilling');
    }



}




