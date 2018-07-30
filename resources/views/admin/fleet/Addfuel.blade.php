<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{URL::asset('app-assets/css-rtl/bootstrap.min.css')}}">
  <script src="{{URL::asset('app-assets/js/core/libraries/jquery.min.js')}}"></script>
  <script src="{{URL::asset('app-assets/vendors/js/editors/ckeditor/styles.js')}}"></script>
</head>
<body>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myfuel" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form action="Addfuel" method="post" id="frmFuel">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-lg-4 col-sm-4">
          <div class="form-group">  
            <input type="date" name="fueldate" class="form-control" placeholder="Fuel Date">
          </div>
        </div>
         <div class="col-lg-4 col-sm-4">
          <div class="form-group">
            <input type="text" name="plate_no" class="form-control" placeholder="Plate No">
          </div>
        </div>

        <div class="col-lg-4 col-sm-4">
          <div class="form-group">
            <input type="text" name="driver" class="form-control" placeholder="Driver">
          </div>
        </div>

        <div class="col-lg-4 col-sm-4">
          <div class="form-group">
            <input type="text" name="price" class="form-control" placeholder="Price per Liter">
          </div>
        </div>

        <div class="col-lg-4 col-sm-4">
          <div class="form-group">
           <select name="fill" id="fill" class="form-control">
             <option value="">Fill Type:</option>
             <option value="Full Tank">Full Tank</option>
              <option value="Filled">Filled</option>

           </select>
          </div>
        </div>
    <div class="col-lg-4 col-sm-4">
          <div class="form-group">
            <input type="text" name="cost" class="form-control" placeholder="Total Cost">
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <input type="submit" name="savefuel" value="SAVE" id="savefuel" class="btn btn-sucess">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
