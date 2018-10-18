<?php

namespace App\Http\Controllers;

use App\Client;
use App\Driver;
use App\Ehaulage;
use App\Ihaulage;
use App\Monitor;
use App\Notifications\SMSUpdate;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Input;
use Redirect;
use Response;
use Session;
use Validator;


class HaulageController extends Controller
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

        $haulage = Transaction::whereHas('import_haulage', function ($query){$query->where('transaction_id','!=','');
        })->with('destination','origin','quotation','goods', 'consignee')->get();
        return view('admin.fleet.haulageImport',compact('haulage'));
    }

    public function haulageExport()
    {

        $export = Transaction::whereHas('export_haulage', function ($query){$query->where('transaction_id','!=','');
        })->with('destination','origin','quotation','goods', 'consignee')->get();

        return view('admin.fleet.haulageExport',compact('export'));
    }

    public function assign(Request $request, $id, $shiptypes){


        if($shiptypes == 'Export'){
            $haulage = Ehaulage::findOrFail($id);
        }elseif($shiptypes == 'Import'){
            $haulage = Ihaulage::findOrFail($id);
        }
        $vehicle = Vehicle::where('vehicle_model',$request->vehmodel)->first();
        $driver = Driver::where('fname', $request->driver)->first();

        $vehicle->driver_id = $driver->id;
//            echo $vehicle->driver_id;
        $vehicle->update();
        $haulage->vehicle_id = $vehicle->id;
        $haulage->update();


        Session::flash('success', "Special message goes here");
        return Redirect::back();



    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request) {
        $rules = array (
            'status' => 'required',
            'remarks' => 'required',
            'place_id' => 'required',
            'location' => 'required',
            'transaction' => 'required',
        );
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails())
            return Response::json(array(
                'errors' => $validator->getMessageBag()->toArray()
            ));

        else {
            $status = Transaction::findOrFail($request->transaction);
            $status->status_id = $request->status;
            $status->update();
            $data = new Monitor();
            $data->status = $request->status;
            $data->location = $request->location;
            $data->place_id = $request->place_id;
            $data->remarks = $request->remarks;
            $data->transaction_id = $request->transaction;
            $data->save();
                $client = Client::findOrFail($status->client_id);
                $client->phone_number = $client->phone;
                $client->notify(new SMSUpdate($client, $request->location, $request->status));
//                return response()->json($data);
        }
        return Redirect::back();

    }

    public function getDriver($id){

        $vehicle = Vehicle::findOrFail($id);
        $driver = Driver::findOrFail($vehicle->driver_id);

        return json_encode($driver->fname);
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
        return view('admin.fleet.haulageImport');
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
