
<!-- Modal -->
<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info white">
                <h4 class="modal-title white" id="myModalLabel11">Schedule Import Haulage</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard ">

                        <form action="{{url('tarffRateController@update')}}" method="POST">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="input-group">
                                <input type='text' name="editType" class="form-control" id="type" value=""
                                />
                            </div><br>
                            <div class="input-group">
                                <input type='text' name="editTax" class="form-control" id="tax" value=""
                                />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-info">Confirm</button>
            </div>
        </div>
    </div>
</div>
