
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
  <div class="modal fade" id="myAvail" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">

<table style="width:100%">
  <tr>
    <th>Plate No.</th>
    <th>Vehicle Model</th>
    <th>Action</th>
  </tr>
  @foreach($vehicle as $vehicles)
  <tr>
    <td>{{$vehicles->plate_no}}</td>
    <td>{{$vehicles->vehicle_model}}</td>
    <td>
      @if($vehicles->avail == 'Available')
          {!! Form::open(['method'=>'PATCH', 'action'=>['VehiclesController@update', $vehicles->id]]) !!}
          <input type="hidden" name="driver_id" value="">
          <input type="hidden" name="avail" value="Not Available">
          {!! Form::submit('Assign',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        @else
        {!! Form::open(['method'=>'PATCH', 'action'=>['VehiclesController@update', $vehicles->id]]) !!}
        <input type="hidden" name="avail" value="Available">
        {!! Form::submit('Un-Assign',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}
      @endif
    </td>
  </tr>
    @endforeach

</table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
