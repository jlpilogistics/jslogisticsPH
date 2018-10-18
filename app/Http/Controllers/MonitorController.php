<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Transaction;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $tasks =Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Export');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.monitor.monitor',compact('tasks'));
    }
    public function importMonitor()
    {

        $import =Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Import');
        })->with('destination','origin','quotation','goods', 'consignee')->get();
        return view('admin.monitor.ImportMonitor',compact('import'));
    }
    public function domesticMonitor()
    {
        $domestic =Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Import');
        })->with('destination','origin','quotation','goods', 'consignee')->get();
        return view('admin.monitor.DomesticMonitor',compact('domestic'));
    }

    public function viewInventory()
    {
        $transaction = Transaction::with('origin','destination','quotation','goods','documents')->get();
       return view('admin.shipment.inventory', compact('transaction'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
