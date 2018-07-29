<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Commodity;
use App\Incoterm;
use App\Quotation;
use App\Shiptype;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.quote');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Shiptype::all()->pluck('name','name');
        $commodity = Commodity::all()->pluck('type','name');
        $terms = Incoterm::all()->pluck('name','name');

        return view('client.quote', compact('type', 'commodity', 'terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $client = Client::findOrFail(1);
//        $quote = new Quotation;
//        $quote->client_id = $client->id;
//        $quote->mode = $request->mode;
//        $quote->container = $request->contype;
//        $quote->length = $request->length;
//        $quote->width = $request->width;
//        $quote->height = $request->height;
//        $quote->weight = $request->weight;
//        $quote->quantity = $request->quantity;
//        $quote->commodity = $request->commodity;
//        $quote->message = $request->message;
//        $quote->save();
//        $shiptype = Shiptype::where('id', $request->transaction)->first();
//        $quote->shiptypes()->save($shiptype);
//        return view('client.confirmation');
        $data =  $request->all();
        return view('client.summary', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function summary(Request $request){

        return $request->all();



    }
}
