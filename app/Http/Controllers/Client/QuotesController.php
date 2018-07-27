<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Commodity;
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
        $type = Commodity::lists('type','id')->all();
        return view('client.quote', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->lastName = $request->lname;
        $client->firstName = $request->fname;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->company = $request->company;
        $client->email = $request->email;
        $client->city = $request->city;
        $client->country = $request->country;
        $client->zip = $request->zip;
        $client->save();
        $quote = new Quotation;
        $quote->client_id = $client->id;
        $quote->mode = $request->mode;
        $quote->container = $request->contype;
        $quote->length = $request->length;
        $quote->width = $request->width;
        $quote->height = $request->height;
        $quote->weight = $request->weight;
        $quote->quantity = $request->quantity;
        $quote->commodity = $request->commodity;
        $quote->message = $request->message;
        $quote->save();
        $shiptype = Shiptype::where('id', $request->transaction)->first();
        $quote->shiptypes()->save($shiptype);
        return view('client.confirmation');
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
}
