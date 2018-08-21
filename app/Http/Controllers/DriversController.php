<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Vehicle;
use Illuminate\Http\Request;

class DriversController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Driver::all();
        $vehicle = Vehicle::all()->where('avail','==','Available');

        return view('admin.fleet.driver_table' ,compact('tasks', 'vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.fleet.driver');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Driver;
        if ($file = $request->file('image')) {
            $file->move(public_path(). '/', $file->getClientOriginalName());
            $user->driver_ref = $request->driver_id;
            $user->fname= $request->driver_name;
            $user->address= $request->driver_address;
            $user->dateofbirth= $request->driver_bday;
            $user->phoneNum= $request->driver_phone;
            $user->licenceNo= $request->driver_licence;
            $user->img= $file->getClientOriginalName();
            $user->expDate= $request->driver_expyr;
        }
        $user->save();
        return redirect("/drivers");
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
