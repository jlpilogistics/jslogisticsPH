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
    <div class="modal fade" id="myeditV" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Vehicle Info</h4>
                </div>
                <div class="modal-body">
                    <form action="Addfuel" method="post" id="frmFuel">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="fueldate" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="plate_no" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="driver" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>


                        <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="cost" class="form-control" >
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
</div>

</body>
</html>
