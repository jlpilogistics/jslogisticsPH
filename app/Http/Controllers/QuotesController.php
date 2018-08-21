<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Client;
use GuzzleHttp;
use App\Quotation;
use App\Shiptype;
use App\Transaction;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuotesController extends Controller
{

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
        $charge = $charges->where('mode_id',$ref_id)->pluck('name','id');
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
        $pdf = PDF::loadView('admin.quotation.pdf');
        return $pdf->download('invoice.pdf');

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
