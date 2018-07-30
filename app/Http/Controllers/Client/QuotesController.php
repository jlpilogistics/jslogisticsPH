<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Commodity;
use App\Destination;
use App\Document;
use App\Goods;
use App\Incoterm;
use App\Origin;
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
        $type = Shiptype::all()->pluck('name','id');
        $commodity = Commodity::all()->pluck('type','id');
        $terms = Incoterm::all()->pluck('name','id');

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
        $client = Client::findOrFail(1);
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

                $quote = new Quotation;
                $quote->client_id = $client->id;
                $quote->mode = $request->mode;
                $quote->package = $request->package;
                $quote->length = $request->length;
                $quote->width = $request->width;
                $quote->height = $request->height;
                $quote->weight = $request->weight;
                $quote->quantity = $request->quantity;
                $quote->aweight = $request->aweight;
                $quote->avolume = $request->avolume;
                $quote->dimused = $request->dimused;
                $quote->save();
                $origin = new Origin;
                $origin->quotation_id = $quote->id;
                $origin->port = $request->port;
                $origin->zip = $request->zip;
                $origin->country = $request->country;
                $origin->city = $request->city;
                $origin->etd = $request->etd;
                $origin->save();
                $dest = new Destination;
                $dest->quotation_id = $quote->id;
                $dest->ports = $request->ports;
                $dest->zip = $request->zip;
                $dest->country = $request->country;
                $dest->city = $request->city;
                $dest->eta = $request->eta;
                $dest->save();
                $docs = new Goods;
                $docs->quotation_id = $quote->id;
                $docs->goods = $request->goods;
                $docs->name = $request->name;
                $docs->term = $request->term;
                $docs->danger = $request->danger;
                $docs->temp = $request->temp;
                $docs->description = $request->message;
                $docs->save();
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
