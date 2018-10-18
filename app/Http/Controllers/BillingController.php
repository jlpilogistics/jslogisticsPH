<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Client;
use App\Transaction;
use Illuminate\Http\Request;
use App\Import;
use App\Export;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Compound;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data = Transaction::with('origin','destination','goods','quotation')->get();
        $client = Client::with('transaction')->get();
        return view('admin.billing.List', compact('client','data'));
    }

    public function billExport()
    {
        $data = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Export');
        })->with('destination','origin','quotation','goods')->get();
        $client = Client::with('transaction')->get();
        return view('admin.billing.ListExport', compact('client','data'));
    }
    public function search(Request $request){
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.billing.invoice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responseall
     */

    public function clientprofile(Request $request, $id)
    {
        $transact = Transaction::with('origin','destination','goods','quotation')->findOrFail($id);
        $char = Import::where($transact->goods->term, 1)->where('airfreight', 1)->get();
        return view('admin.billing.clientprofile',compact('char'));
    }

    public function generate(Request $request)
    {
        $price[] =$request->get('price');
        $in =$request->get('charge1');
        $data[] = $request->get('bi');
        $soa[] = $request->get('soa');




        return view('admin.billing.GenerateReport',compact('data','soa','in','price'));
    }

    public function generateExport(Request $request)
    {

        $data[] = $request->get('bi');
        $soa[] = $request->get('soa');


        return view('admin.billing.trial',compact('data','soa'));

    }
    public function generateReport(Request $request)
    {

        return view('admin.billing.GenerateReport');
    }
    public function clientprofileExport()
    {
        $ex = Export::all();
        return view('admin.billing.generateExport',compact('ex'));
    }
    public function clientprofileDomestic()
    {
        $dom = Export::all();
        return view('admin.billing.generateDomestic',compact('dom'));
    }
    public function store(Request $request)
    {
    }

    public function taxes()
    {
        return view('admin.billing.cuwstomestaxes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
