<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Client;
use App\Notifications\QuoteSent;
use App\User;
use GuzzleHttp;
use Mail;
use Notification;
use App\Quotation;
use App\Shiptype;
use App\Transaction;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;


use App\Http\Requests;

class QuotesController extends Controller
{

    private $pdf = '';
    private $data = '';
    private $charges = '';
    private $terms = '';



    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('admin.quotation.index');
// this is right       $sender = Sender::with('quotations')->get();
//        $quote = Quotation::all();
//        $quote = Quotation::with('shiptypes')->get(); /asdasd
//        $client = Client::with('quotation')->findMany(['1']); /asasdasd
//        $client = Client::with('quotation')->get();
//        return $sender->quotations;
//        $sender->each(function($senders) // foreach($posts as $post) { }
//        {
//            echo $senders;
//           echo $senders->quotations;
//        });
//        foreach($sender->quotations as $quote){
//            echo $quote->commodity;
//        }

//       return $quote->commodity;
        $quote = Transaction::with('destination','origin','quotation','goods')->get();

        return view('admin.quotation.index', compact('quote'));
    }

    public function create(){

    }

    public function createQuote($id)
    {
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
        $data = Transaction::with('origin','destination','goods','quotation')->findOrFail($id);

        $client = Client::with('transaction')->findOrFail($data->client_id);
        if(($data->goods->mode) == 'FCL40'){
            $ref_id = 1;
        }
        elseif(($data->goods->mode) == 'FCL20'){
            $ref_id = 2;
        }
        elseif(($data->goods->mode) == 'LCL'){
            $ref_id = 3;
        }
        if(($data->goods->mode) == 'Air'){
            $ref_id = 4;
        }



        $charges = new Charge();
        $charge = $charges->where('mode_id',$ref_id)->pluck('name','name');


        return view('admin.quotation.create-quote', compact('charge','currency','data','client','pesos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $pdf = PDF::loadView('admin.quotation.pdf');
//        return $pdf->download('invoice.pdf');
        $ch = new Charge();
        $data = $request->all();
        for($i=0;$i<count($data['conditions']);$i++){
            $terms[] = array('list'=>$request->conditions[$i]);
        }

        $transact = new Transaction();
        $transaction = $transact->findOrFail($request->id)->first();
        $invoice = $transaction->invoices()->create([]);
        for($i=0;$i<count($data['charge']);$i++){
            $curr = $request->currency;
            $peso = $request->pesoRate;
            $convert = $request->amount[$i];
            $result = $ch->convertRate($curr,$peso, $convert);
            $invoice = $invoice->addAmountExclTax($result, $request->charge[$i], 0, $data['taxes']);
            $charges[] = array('id'=>($i+1),
                'charge'=>$request->charge[$i],
                'amount'=>$result,
            );

        }
        $this->data = $data;
        $this->charges = $charges;
        $this->terms = $terms;








//        $pdf =  PDF::loadView('admin.billing.invoice', with(['data' => $this->data, 'charges' => $this->charges, 'terms' => $this->terms]));
//        ini_set('max_execution_time', 300);
//        return $pdf->stream();


        Notification::route('mail', 'ryanjayretutar@gmail.com')->notify(new QuoteSent($this->data, $this->charges, $this->terms, $invoice));

//        echo json_encode($charges);

//        Mail::send('admin.billing.invoice',['name' => $terms], function ($message)
//        {
//            ini_set('max_execution_time', 300);
//            $pdf =  PDF::loadView('admin.billing.invoice');
//
//            $message->from('jlpilogistics@gmail.com', 'Jexsan Logistics Philippines Inc.')
//                ->subject('Quotation Requested');
//
//            $message->to('ryanjayretutar@gmail.com');
//            $message->attachData($pdf->output(),"name.pdf");
//
//
//
//        });
//        return view('admin.quotation.pdf', compact('data','charges','terms'));



//        echo json_encode($request->all());
//        $request->session()->put('some_key', $request->all());
//        echo json_encode($request->session()->get('some_key'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Transaction::with('origin','destination','goods','quotation')->findOrFail($id);
        $client = Client::with('transaction')->findOrFail($data->client_id);
//        $quote = Quotation::with('clients');
        return view('admin.quotation.view', compact('data','client'));
    }


    public function sendQuote(){



    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function findcharge($id){
        $amount = Charge::where('id', $id)->pluck('amount');
        return response()->json(['success'=>true, 'info'=>$amount]);
    }
}
