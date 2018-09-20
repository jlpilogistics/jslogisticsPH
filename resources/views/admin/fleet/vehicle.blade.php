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
					  <div class="form-group">
						  <label for="form-orgrole">Fuel Type:</label>
						  <div class="input-group">
							  <div class="d-inline-block custom-control custom-radio mr-1">
								  <input  type="radio" name="fuel_type" value="Diesel"  class="custom-control-input" id="typ1">
								  <label class="custom-control-label" for="typ1">Diesel</label>
							  </div>
							  <div class="d-inline-block custom-control custom-radio mr-1">
								  <input  type="radio" name="fuel_type" value="Biofuel" class="custom-control-input" id="typ2">
								  <label class="custom-control-label" for="typ2">Biofuel</label>
							  </div>
							  <div class="d-inline-block custom-control custom-radio">
								  <input  type="radio" name="fuel_type" value="Unleaded" class="custom-control-input" id="typ3">
								  <label class="custom-control-label" for="typ3">Unleaded</label>
							  </div>
						  </div>
					  </div>
				  </div>

				  <div class="col-6">
					  <div class="form-group">
						  <label for="form-orgrole">Availability:</label><br>
						  <div class="input-group">
							  <div class="d-inline-block custom-control custom-radio mr-1">
								  <input type="radio" name="avail" value="Available"  class="custom-control-input" id="av1">
								  <label class="custom-control-label" for="av1">Available</label>
							  </div>
							  <div class="d-inline-block custom-control custom-radio">
								  <input  type="radio" name="avail" value="Not Available" class="custom-control-input" id="av2">
								  <label class="custom-control-label" for="av2">Not Available</label>
							  </div>
						  </div>
					  </div>
				  </div>


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