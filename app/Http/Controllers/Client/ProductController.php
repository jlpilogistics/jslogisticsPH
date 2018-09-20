<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Commodity;
use App\Destination;
use App\Goods;
use App\Incoterm;
use App\Origin;
use App\Package;
use App\Quotation;
use App\Shiptype;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use GuzzleHttp;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('product');
        $products = Product::all();
        return view('client.quote',compact('products',$products));
    }

    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $type = Shiptype::all()->pluck('name','name');
        $origin = $request->session()->get('origin');
        $dest = $request->session()->get('dest');
        $quote = $request->session()->get('quote');
        $goods = $request->session()->get('goods');
        $commodity = Commodity::all()->pluck('type','type');
        $terms = Incoterm::all()->pluck('name','name');
        $clients = Client::findOrFail(Auth::user()->client_id)->first();
//        $base = new GuzzleHttp\Client([
//            'base_uri' => 'http://data.fixer.io/',
//        ]);
//        $response = $base->request('GET', 'api/latest?access_key=' . env('FIXER_API_KEY') . '&symbols=PHP,phpUSD,JPY,GBP,AUD,CHF,CAD,MXN,CNY,NZD&format=1');
//        $response_data = json_decode($response->getBody()->getContents());
//        foreach ($response_data as $currency) {
//            $rates[] = $currency;
//        }
//        $request->session()->flush();
        $packages = Package::all()->pluck('type','type');

        return view('client.quote',compact('origin', 'quote', 'dest','goods', 'type', 'commodity','terms','quote', 'packages','currency','clients'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {

        $validatedOrigin = $request->validate([
            'zip' => 'required',
            'city' => 'required',
            'country' => 'required',
            'etd' => 'required',
            'port' => 'required',
        ]);
        $validatedDest = $request->validate([
            'dzip' => 'required',
            'dcountry' => 'required',
            'dcity' => 'required',
            'deta' => 'required',
            'dport' => 'required',
        ]);
        $validatedGoods = $request->validate([
            'shiptypes'=>'required',
            'mode'=>'required',
            'goods' => 'required',
            'name' => 'required',
            'term' => 'required',
            'danger' => 'required',
            'temp' => 'required',
            'description' => 'required',
            'aweight' => 'required',
            'avolume' => 'required',
            'currency' => 'required',
            'insurance' => 'required',
        ]);

        if(empty($request->session()->get('origin'))) {
            $origin = new Origin();
            $origin->fill($validatedOrigin);
            $request->session()->put('origin', $origin);
        }
        if(empty($request->session()->get('dest'))){
            $dest = new Destination();
            $dest->fill($validatedDest);
            $request->session()->put('dest', $dest);
        }
        if(empty($request->session()->get('goods'))) {
            $goods = new Goods();
            $goods->fill($validatedGoods);
            $request->session()->put('goods', $goods);
        }

        else{
            $origin = $request->session()->get('origin');
            $dest = $request->session()->get('dest');
            $goods = $request->session()->get('goods');
            $origin->fill($validatedOrigin);
            $dest->fill($validatedDest);
            $goods->fill($validatedGoods);
            $request->session()->put('origin', $origin);
            $request->session()->put('dest', $dest);
            $request->session()->put('goods', $goods);
        }

        for($i=0;$i<count($request->dimused);$i++){
            $data[]= array('dimused'=>$request->dimused[$i]['dimused'],
                'package'=>$request->package[$i]['package'],
                'quantity'=>$request->quantity[$i]['quantity'],
                'length'=>$request->length[$i]['length'],
                'width'=>$request->width[$i]['width'],
                'height'=>$request->height[$i]['height'],
                'weight'=>$request->weight[$i]['weight']);
        }
        $x = 0;
        foreach($data as $item){
            $x++;
            $quote = new Quotation();
            $quote->fill($item);
            $request->session()->put('quote'.$x, $quote);
        }
        return redirect('/products/create-step4');
    }


    /**
     * Show the step 2 Form for creating a new product.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $quote = $request->session()->get('quote');
        $origin = $request->session()->get('origin');
        $dest = $request->session()->get('dest');
        $goods = $request->session()->get('goods');
        return view('client.quote-step4',compact('quote', 'origin', 'dest', 'goods'));
    }

    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $client = Client::findOrFail($user->client_id);
        $transact = new Transaction();
        $transact->transact = $transact->generateTransaction();
        $transact->status_id = 1;
        $transact->client_id = $client->id;
        $transact->save();
        if($request->session()->get('quote1')){
            for($x = 1 ; $x<20; $x++){
                if($request->session()->get('quote'.$x)){
                    $quote = $request->session()->get('quote'.$x);
                    $rfq = new Quotation();
                    $rfq->requestQuote($quote, $transact);
                }
            }
        }
        $origin = $request->session()->get('origin');
        $origin->transaction_id = $transact->id;
        $goods = $request->session()->get('goods');
        $goods->transaction_id = $transact->id;
        $dest = $request->session()->get('dest');
        $dest->transaction_id = $transact->id;

        if(!(($origin->save()) && ($dest->save()) && ($goods->save()))){

            return view('errors.503');
        }else{
            $request->session()->flush();
            return redirect('/Main');
        }

    }

}
