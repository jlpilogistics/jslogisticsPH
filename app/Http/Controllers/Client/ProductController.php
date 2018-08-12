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
use Session;

class ProductController extends Controller
{
    //


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
        $terms = Incoterm::all()->pluck('name','id');
        $origin = $request->session()->get('origin');
        $dest = $request->session()->get('dest');
        $quote = $request->session()->get('quote');
        return view('client.quote',compact('origin', 'quote', 'dest', 'type', 'commodity','terms'));
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
        $validatedType = $request->validate([
            'shiptypes'=>'required',
            'mode'=>'required',
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
        if(empty($request->session()->get('goods'))){
            $goods = new Goods();
            $goods->fill($validatedType);
            $request->session()->put('goods', $goods);
        }
        else{
            $origin = $request->session()->get('origin');
            $dest = $request->session()->get('dest');
            $goods = $request->session()->get('goods');
            $origin->fill($validatedOrigin);
            $dest->fill($validatedDest);
            $goods->fill($validatedType);
            $request->session()->put('origin', $origin);
            $request->session()->put('dest', $dest);
            $request->session()->put('goods', $goods);
        }
        return redirect('/products/create-step2');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        if(empty($request->session()->get('origin')) && empty($request->session()->get('origin'))){
            return redirect('products/create-step1');
        }
        $goods = $request->session()->get('goods');
        $commodity = Commodity::all()->pluck('type','type');
        $terms = Incoterm::all()->pluck('name','name');
        return view('client.quote-2',compact('commodity','terms', 'goods'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $validatedGoods = $request->validate([
            'goods' => 'required',
            'name' => 'required',
            'term' => 'required',
            'danger' => 'required',
            'temp' => 'required',
            'description' => 'required',
        ]);

        if(empty($request->session()->get('goods'))) {
            $goods = new Goods();
            $goods->fill($validatedGoods);
            $request->session()->put('goods', $goods);
        }
        else{
            $goods = $request->session()->get('goods');
            $goods->fill($validatedGoods);
            $request->session()->put('goods', $goods);
        }
        return redirect('/products/create-step3');

    }

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        if(empty($request->session()->get('origin')) && empty($request->session()->get('origin')) && empty($request->session()->get('goods')) ){
            return redirect('products/create-step1');
        }
        elseif (empty($request->session()->get('goods'))){
            return redirect('products/create-step2');
        }
//        $request->session()->flush();
        $packages = Package::all()->pluck('type','type');
        return view('client.quote-step3',compact('quote', 'packages'));
    }

    public function postCreateStep3(Request $request)
    {
        for($i=0;$i<count($request->dimused);$i++){
            $data[]= array('dimused'=>$request->dimused[$i]['dimused'],
                 'package'=>$request->package[$i]['package'],
                 'quantity'=>$request->quantity[$i]['quantity'],
                 'length'=>$request->length[$i]['length'],
                 'width'=>$request->width[$i]['width'],
                 'height'=>$request->height[$i]['height'],
                 'weight'=>$request->weight[$i]['weight']);
        }

        $validatedData = $request->validate([
            'aweight' => 'required',
            'avolume' => 'required',
        ]);

//        for ($x = 0; $x < count($data); $x++) {
////            $topic = array($item);
//            if(empty($request->session()->get('quote'.$x))) {
//                $quote = new Quotation();
//                $quote->fill($data);
//                $request->session()->put('quote'. $x, $quote);
//            }
//        }
        $x = 0;
        foreach($data as $item){
                $x++;
                $quote = new Quotation();
                $quote->fill($item);
                $request->session()->put('quote'.$x, $quote);
        }


            $goods = $request->session()->get('goods');
            $goods->fill($validatedData);
            $request->session()->put('goods', $goods);

        return redirect('/products/create-step4');

    }
    public function createStep4(Request $request)
    {
        if(empty($request->session()->get('origin')) && empty($request->session()->get('origin')) && empty($request->session()->get('goods')) && empty($request->session()->get('quote1'))){
            return redirect('products/create-step1');
        }
        elseif (empty($request->session()->get('goods')) && empty($request->session()->get('quote1'))){
            return redirect('products/create-step2');
        }
        elseif (empty($request->session()->get('quote1'))){
            return redirect('products/create-step3');
        }
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
        $client = Client::findOrFail(1);
        $transact = new Transaction();
        $transact->transact = $transact->generateTransaction();
        $transact->save();
        if($request->session()->get('quote1')){
            for($x = 1 ; $x<20; $x++){
                if($request->session()->get('quote'.$x)){
                    $quote = $request->session()->get('quote'.$x);
                    $rfq = new Quotation();
                    $rfq->requestQuote($client, $quote, $transact);
                }
            }
        }
        $origin = $request->session()->get('origin');
        $origin->transaction_id = $transact->id;
        $origin->save();
        $goods = $request->session()->get('goods');
        $goods->transaction_id = $transact->id;
        $goods->save();
        $dest = $request->session()->get('dest');
        $dest->transaction_id = $transact->id;
        $dest->save();
        $request->session()->flush();
        return redirect('/Main');
    }

}
