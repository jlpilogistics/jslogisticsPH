@extends('admin.fleet.assets')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
@yield('assets')
</head>
<?php 
 $pool = 123456790;
$imp_id= substr(str_shuffle(str_repeat($pool, 4)), 0, 4);

// $fname=$_REQUEST('fname');
// $lname=$_REQUEST('lname');
// $a=substr($fname, 0,1);
// $b=substr($lname, 0,1);

?>


<body >
<div class="app-content content">
<div class="content-wrapper">
<div class="content-body">
	<section class="horizontal-grid" id="horizontal-grid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ADD VEHICLE INFORMATION</h4>
                  <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                </div>
   {!! Form::open(['method'=>'POST', 'action'=>'VehiclesController@store']) !!}
   <div class="col-5">
	<label for="">Vehicle ID</label>
	<input type="text" name="vehicle_ref" value="IFJ<?php echo($imp_id);?>" class="form-control col-md-9" readonly><br></div>
	<div class="col-9">
	<label for="">Plate No.</label>
	<input type="text" name="plate_no"  class="form-control col-md-9" ><br></div>

	<div class="col-7">
	<label for="">Date Registered</label><br>
	<input type="date" name="date_reg"  class="form-control col-md-7" ><br></div>

	<div class="col-7">
	<label for="">Date Expiration</label><br>
	<input type="date" name="date_exp"  class="form-control col-md-7" ><br></div>

	<div class="col-6">
	<label for="">Vehicle Model</label><br>
	<input type="text" name="vehicle_model"  class="form-control col-md-8"><br></div>

	<div class="col-6">
	<label for="">Fuel Type:</label><br>
	<input type="radio" name="fuel_type" value="Diesel"  class="form-control col-md-5">Diesel
	<input type="radio" name="fuel_type" value="Biofuel"  class="form-control col-md-5">Biofuel
	<input type="radio" name="fuel_type" value="Unleaded"  class="form-control col-md-5">Unleaded<br><br></div>

	<div class="col-6">
	<label for="">Availability:</label><br>
	<input type="radio" name="avail" value="Available"  class="form-control col-md-6">Available
	<input type="radio" name="avail" value="Not Available"  class="form-control col-md-6">Not Available<br></div>


	<div class="col-6">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<br><br><br>
	<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary "> <input type="reset" name="reset" value="RESET" class="btn btn-warning"></div>

 <br><br>
                    {!! Form::close() !!}
                  </div>
              </div>
          </div>
</div>
</div>
</div>

      </section>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@yield('scripts')
<!-- END PAGE LEVEL JS-->
</body>
</html>