<?php

namespace App\Http\Controllers\Client;

use App\Commodity;
use App\Destination;
use App\Goods;
use App\Incoterm;
use App\Origin;
use App\Package;
use App\Quotation;
use App\Shiptype;
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
        $validatedQuote = $request->validate([
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
        if(empty($request->session()->get('quote'))){
            $quote = new Quotation();
            $quote->fill($validatedQuote);
            $request->session()->put('quote', $quote);
        }
        else{
            $origin = $request->session()->get('origin');
            $dest = $request->session()->get('dest');
            $quote = $request->session()->get('quote');
            $origin->fill($validatedOrigin);
            $dest->fill($validatedDest);
            $quote->fill($validatedQuote);
            $request->session()->put('origin', $origin);
            $request->session()->put('dest', $dest);
            $request->session()->put('quote', $quote);
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

        $goods = $request->session()->get('goods');
        $commodity = Commodity::all()->pluck('type','type');
        $terms = Incoterm::all()->pluck('name','name');
        $quote = $request->session()->get('quote');
        echo $quote;
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
            'message' => 'required',
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
//        $request->session()->flush();
        $packages = Package::all()->pluck('type','type');
        $quote = $request->session()->get('quote');
        return view('client.quote-step3',compact('quote', 'packages'));
    }

    public function postCreateStep3(Request $request)
    {
        for ($i = 0; $i < count(array('dimused')); $i++){

            $validatedData = $request->validate([
                'dimused' => 'required',
                'quantity' => 'required',
                'package' => 'required',
                'length' => 'required',
                'width' => 'required',
                'height' => 'required',
                'weight' => 'required',

            ]);

        }
        if (empty($request->session()->get('quote'))) {
            $quote = new Quotation();
            $quote->fill(array($validatedData));
            $request->session()->put('quote', $quote);
        } else {
            $quote = $request->session()->get('quote');
            $quote->fill($validatedData);
            $request->session()->put('quote', $quote);
        }

        return redirect('/products/create-step4');

    }
    public function createStep4(Request $request)
    {
        $quote = $request->session()->get('quote');
        $origin = $request->session()->get('origin');
        $dest = $request->session()->get('dest');
        $goods = $request->session()->get('goods');
//        echo $quote;
//        return redirect('/products/create-step3');
        return view('client.quote-step4',compact('quote', 'origin', 'dest', 'goods','item','itemize'));
    }

    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->session()->get('product');
        $product->save();
        return redirect('/products');
    }

}