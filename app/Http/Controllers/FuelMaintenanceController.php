<?php

namespace App\Http\Controllers;
use App\maintenance;
use Illuminate\Http\Request;
use App\fuel;
use Illuminate\Support\Facades\Input;
class FuelMaintenanceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $getFuel=fuel::all();
        return view("admin.fleet.fuel",compact('getFuel'));
    }

    public function main(){
        $maintain=maintenance::all();
        return view("admin.fleet.maintenance",compact('maintain'));
    }
    public function addFuel(Request $request)
    {

        $fuels = new fuel;
        $fuels->fuel_date= Input::get('fueldate');
        $fuels->plate_no= Input::get('plate_no');
        $fuels->driver= Input::get('driver');
        $fuels->price= Input::get('price');
        $fuels->fill= Input::get('fill');
        $fuels->cost= Input::get('cost');

        $fuels->save();
        return redirect("/fuel");
        // if ($quest->ajax()){
        //     $fuel=fuel::create($request->all());
        //     return response()->json($fuel);
        //             }
    }
    public function addMain(Request $request)
    {

        $main = new maintenance;
        $main->date= Input::get('date');
        $main->description= Input::get('desc');
        $main->vModel= Input::get('vModel');
        $main->total= Input::get('cost');

        $main->save();
        return redirect("/maintenance");
        // if ($quest->ajax()){
        //     $fuel=fuel::create($request->all());
        //     return response()->json($fuel);
        //             }
    }



}
