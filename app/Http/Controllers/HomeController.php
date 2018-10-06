<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Destination::where('dcountry', '=', 'Philippines')
            ->orderBy('id', 'desc')
            ->get();
        return view('admin.index',compact('count'));
    }
}
