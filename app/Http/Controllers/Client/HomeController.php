<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.Main');
    }

    public function showAbout()
    {
        return view('client.about');
    }

    public function showLocation()
    {
        return view('client.location');
    }
    public function showImport()
    {
        return view('client.import');
    }
    public function showExport()
    {
        return view('client.export');
    }
    public function showDomestic()
    {
        return view('client.domestic');
    }
    public function calculator()
    {
        return view('client.calculator');
    }

}




