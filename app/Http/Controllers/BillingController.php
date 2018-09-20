<?php

namespace App\Http\Controllers;

use App\Client;
use App\Transaction;
use Illuminate\Http\Request;

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

    public function search(Request $request){

        if ($request->ajax()){
            $output="";
            $customers=DB::table('clients')->where('firstName','LIKE', '%' .$request->search.'&')
                ->orWhere('lastName','LIKE', '%'.$request->search.'&')->get();
            foreach ($customers as $key =>$customer){
                $output.='<tr>'.
                    '<td>'.$customer->lastName.'</td>'.
                    '<td>'.$customer->company.'</td>'.
                    '<td>'.$customer->email.'</td>'.
                    '<td>'.$customer->address.'</td>'.
                    '<td>'.$customer->city.'</td>'.
                    '</tr>';
            }

        }
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
     * @return \Illuminate\Http\Response
     */

    public function clientprofile()
    {
        return view('admin.billing.clientprofile');
    }
    public function store(Request $request)
    {
        //
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
