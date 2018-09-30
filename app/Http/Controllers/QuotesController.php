<?php

namespace App\Http\Controllers;

use App\Brokerage;
use App\Charge;
use App\Client;
use App\Commodity;
use App\Export;
use App\Import;
use App\Notifications\QuoteSent;
use App\Session;
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
    protected $data = '';
    private $charges = '';
    private $noncharges = '';
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
        $quote = Transaction::with('destination','origin','quotation','goods', 'consignee')->where('status_id', 1)->get();
        $quo = Transaction::with('destination','origin','quotation','goods', 'consignee')->where('status_id', 2)->get();


        return view('admin.quotation.index', compact('quote','quo'));
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
        $data = Transaction::with('origin','destination','goods','quotation')->findOrFail($id);
        $value = $data->goods->insurance;
        foreach ($response_data as $currency) {
            $rates[] = $currency;
        }
        foreach ($peso_data->rates as $peso_rate){
            $pesos = $peso_rate;
        }
        $ins = $data->goods->danger;
        if($ins == 'Yes'){
            $insurance = 0.04;
        }else{
            $insurance = 0.02;
        }


        $totVal = $value * $insurance;
        $broker = Brokerage::where('start_value', '<=' , $value)->where('end_value', '>=', $value)->first();
        $tax = Commodity::where('type', $data->goods->goods)->first();
        $dutax = $tax->tax;


        if ($value > 200000){
            $total = $value - 200000;
            $fin = ($total*0.01)/8;
            $broker->rate = 5300 + $fin;
            $brate = $broker->rate;
        }else{
            $brate=$broker->rate;
        }

        $duties = $value * ($dutax/100);
        $client = Client::with('transaction')->findOrFail($data->client_id);
        $type = $data->goods->shiptypes;
        $mode = $data->goods->mode;
        $term = $data->goods->term;
        if((($mode) == 'FCL40' || ($mode) == 'FCL20' || ($mode) == 'LCL') && ($type) == 'Export'){
            $export = new Export();
            $export->rateCharge($type, $mode, $brate);
            $stdrd =  $export->where('standard', 1)->where($term,1)->where('oceanfreight', 1)->get();
            $stdrd1 =  $export->where('standard', 1)->where($term,1)->where('oceanfreight', 1)->pluck('particulars', $mode);
            $stdrd2 =  $export->where('standard', 1)->where($term,0)->where('oceanfreight', 1)->pluck('particulars', $mode);
            $nonstdrd = $export->where('standard', 0)->where($term,0)->where('oceanfreight', 1)->pluck('particulars','particulars');
        }
        if((($mode) == 'FCL40' || ($mode) == 'FCL20' || ($mode) == 'LCL') && ($type) == 'Import'){
            $import = new Import();
            $import->importRates($type, $mode, $brate);
            $stdrd = $import->where('standard', 1)->where($term,1)->where('oceanfreight', 1)->get();
            $stdrd1 =  $import->where('standard', 1)->where($term,1)->where('oceanfreight', 1)->pluck('particulars',$mode);
            $nonstdrd = $import->where('standard', 0)->where($term,1)->where('oceanfreight', 1)->pluck('particulars','particulars');
        }
        if(($mode) == 'Air'  && ($type) == 'Export'){
            $export = new Export();
            $export->rateCharge($type, $mode, $brate);
            $stdrd = $export->where('standard', 1)->where($term,1)->where('airfreight', 1)->get();
            $stdrd1 =  $export->where('standard', 1)->where($term,1)->where('airfreight', 1)->pluck('particulars',$mode);
            $nonstdrd = $export->where('standard', 0)->where($term,1)->where('airfreight', 1)->pluck('particulars','particulars');
        }
        if(($mode) == 'Air'  && ($type) == 'Import'){
            $import = new Import();
            $import->importRates($type, $mode, $brate);
            $stdrd = $import->where('standard', 1)->where($term,1)->where('airfreight', 1)->get();
            $stdrd1 =  $import->where('standard', 1)->where($term,1)->where('airfreight', 1)->pluck('particulars',$mode);
            $nonstdrd = $import->where('standard', 0)->where($term,1)->where('airfreight', 1)->pluck('particulars','particulars');
        }

        return view('admin.quotation.create-quote', compact('stdrd','stdrd1','stdrd2','nonstdrd','mode','currency','data','client','pesos','ref_id'));
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
        $datum[] = $request->all();
        for($i=0;$i<count($data['conditions']);$i++){
            $terms[] = array('list'=>$request->conditions[$i]);
        }
        for($i=0;$i<count($data['charge']);$i++){
            $curr = $request->currency;
            $peso = $request->pesoRate;
            $convert = $request->amount[$i];
            $result = $ch->convertRate($curr,$peso, $convert);

            $charges[] = array('id'=>($i+1),
                'charge'=>$request->charge[$i],
                'amount'=>$result,
            );

        }
        for($i=0;$i<count($data['noncharge']);$i++){
            $curr = $request->currency;
            $peso = $request->pesoRate;
            $convert = $request->nonamount[$i];
            $result = $ch->convertRate($curr,$peso, $convert);

            $noncharges[] = array('id'=>($i+1),
                'charge'=>$request->noncharge[$i],
                'amount'=>$result,
            );

        }
        $this->data = $data;
        $this->charges = $charges;
        $this->noncharges = $noncharges;
        $this->terms = $terms;

        $x = 0;
        foreach($charges as $item){
            $x++;
            $session = new Session();
            $session->fill($item);
            $request->session()->put('session'.$x, $session);
        }
        $x = 0;
        foreach($noncharges as $itm){
            $x++;
            $nonsession = new Session();
            $nonsession->fill($itm);
            $request->session()->put('nonsession'.$x, $nonsession);
        }
        $y = 0;
        foreach($terms as $items){
            $y++;
            $session = new Session();
            $session->fill($items);
            $request->session()->put('terms'.$y, $session);
        }
        if(empty($request->session()->get('session'))) {
            $request->session()->put('session', $request->all());
        }else{
            $request->session()->forget('session');
            $request->session()->put('session', $request->all());
        }
        return view('admin.quotation.pdf', compact('data','charges','noncharges','terms'));
//        $pdf =  PDF::loadView('admin.billing.invoice', with(['data' => $this->data, 'charges' => $this->charges, 'terms' => $this->terms]));
//        ini_set('max_execution_time', 300);
//        return $pdf->stream();


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
     * @param Request $request
     */
    public function sendQuote(Request $request){
        $alldata = $request->session()->get('session');
        $transact = new Transaction();
        $transaction = $transact->findOrFail($alldata['id']);
        $transact->status_id = 2;
        $transact->save();
        $invoice = $transaction->invoices()->create([]);

        if($request->session()->get('session1')){
            for($x = 1 ; $x<count(sess); $x++){
                if($request->session()->get('session'.$x)){
                    $session = $request->session()->get('session'.$x);
                    $invoice = $invoice->addAmountExclTax(round($session->amount), $session->charge, 0, $alldata['taxes']);
                    $rates[] = array('id'=>($x),
                        'charge'=>$session->charge,
                        'amount'=>$session->amount,
                    );
                }
            }
        }
        if($request->session()->get('terms1')){
            for($x = 1 ; $x<20; $x++){
                if($request->session()->get('terms'.$x)){
                    $condition = $request->session()->get('terms'.$x);
                    $terms[] = array('list'=>$condition->list);
                }
            }
        }




        Notification::route('mail', $alldata['mail'])->notify(new QuoteSent($alldata, $rates, $terms, $invoice));

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

    public function findcharge($id, $mode){
//        $amount = Charge::where('name','=', $id)->where('mode_id','=',$mode)->pluck('amount');
        $amount = Export::where('particulars', $id)->pluck($mode);
        return response()->json(['success'=>true, 'info'=>$amount]);
    }
    public function findImport($id, $mode){
//        $amount = Charge::where('name','=', $id)->where('mode_id','=',$mode)->pluck('amount');
        $amount = Import::where('particulars', $id)->pluck($mode);
        return response()->json(['success'=>true, 'info'=>$amount]);
    }

    public function flush(Request $request){
        $request->session()->flush();
    }

    public function approved()
    {
        $quo = Transaction::with('destination','origin','quotation','goods', 'consignee')->where('status_id', 3)->get();
        return view('admin.quotation.approved',compact('quo'));
    }


}
