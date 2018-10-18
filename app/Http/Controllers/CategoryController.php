<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
class CategoryController extends Controller
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

    public function import()
    {

        $quote = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Import');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.quotation.importTbl',compact('quote'));
    }
    public function export()
    {

        $export = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Export');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.quotation.exportTbl',compact('export'));
    }
    public function domestic()
    {

        $get = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Domestic');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.quotation.domesticTbl',compact('get'));
    }
    public function approved()
    {
        return view('admin.quotation.approved');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dispatch = Vehicle::all()->where('avail','=','Available');
        return view('admin.quotation.Fleet',compact('dispatch'));
    }
    public function Reportimport()
    {

        $quote = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Import');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.generate.reportImport',compact('quote'));
    }
    public function Reportexport()
    {

        $export = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Export');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.generate.reportExport',compact('export'));
    }
    public function Reportdomestic()
    {

        $get = Transaction::whereHas('goods', function ($query){$query->where('shiptypes','=','Domestic');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.generate.reportDomestic',compact('get'));
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
