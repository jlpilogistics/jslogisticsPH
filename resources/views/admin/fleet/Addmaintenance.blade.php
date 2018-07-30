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
  <div class="modal fade" id="mymain" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form action="Addmaintenance" method="post" id="frmMain">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-lg-4 col-sm-4">
          <div class="form-group">  
            <input type="date" name="date" class="form-control" placeholder="Date">
          </div>
        </div>
         <div class="col-lg-4 col-sm-4">
          <div class="form-group">
           <select name="desc" id="desc" class="form-control">
             <option value="">Description</option>
             <option value="Complete">Complete</option>
                        <option value="Change Oil">Change Oil</option>
                        <option value="Replace Tires">Replace Tires</option>
                        <option value="Adjust Engine">Adjust Engine</option>
                          <option value="Adjust Breaks">Adjust Breaks</option>
                        <option value="Oil Filter">Oil Filter</option>
                        <option value="Air Filter">Air Filter</option>
           </select>
          </div>
        </div>

        <div class="col-lg-5 col-sm-4">
          <div class="form-group">
            <input type="text" name="vModel" class="form-control" placeholder="Vehicle Model">
          </div>
        </div>
        
    <div class="col-lg-5 col-sm-4">
          <div class="form-group">
            <input type="text" name="cost" class="form-control" placeholder="Total Cost">
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <input type="submit" name="saveMain" value="SAVE" id="saveMain" class="btn btn-sucess">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
