@extends('admin.fleet.assets')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
	@yield('assets')
</head>
<?php 
 $pool = 123456790;
$imp_id= substr(str_shuffle(str_repeat($pool, 4)), 0, 4);
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
                  <h4 class="card-title">ADD DRIVER INFORMATION</h4>
                  <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                </div>
   {!! Form::open(['method'=>'POST', 'action'=>'DriversController@store', 'files'=>true ]) !!}
   <div class="col-5">	
	<label for="">Driver ID </label>
	<input type="text" name="driver_id" value="JLPI<?php echo($imp_id);?>" class="form-control col-md-7" readonly><br></div>

	<div class="col-9">	
	<label for="">Full Name</label>
	<input type="text" name="driver_name"  class="form-control col-md-9" ><br></div>

	<div class="col-10">	
	<label for="">Address</label><br>
	<input type="text" name="driver_address"  class="form-control col-md-10" ><br></div>

	<div class="col-7">	
	<label for="">Date of Birth</label><br>
	<input type="date" name="driver_bday"  class="form-control col-md-7" ><br></div>

	<div class="col-6">	
	<label for="">Contact Number</label><br>
	<input type="text" name="driver_phone"  class="form-control col-md-8"><br></div>

	<div class="col-6">	
	<label for="">License No.</label><br>
	<input type="text" name="driver_licence"  class="form-control col-md-8"><br></div>

	<div class="col-6">	
	<label for="">Expiration Date</label><br>
	<input type="date" name="driver_expyr"  class="form-control col-md-8"><br></div>

	<div class="col-6">	
	<label for="">IMAGE</label><br>
	<input type="file" name="image" class="form-control col-md-8"></div>
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
</div>
      </section>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@yield('scripts')
<!-- END PAGE LEVEL JS-->
</body>
</html>