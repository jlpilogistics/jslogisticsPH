@extends('admin.users.assets')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>  
@yield('assets')
</head>  <?php 
 $pool = 123456790;
$imp_id= substr(str_shuffle(str_repeat($pool, 4)), 0, 4);
?>
          <div class="row justify-content-md-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-card-center">Add Admin</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
               <form action="{{url('UserAdmin')}}" method="POST" enctype="multipart/form-data">
                      <div class="form-body">
                      <div class="form-group">
                          <label for="eventRegInput1">ID</label>
                          <input type="text" id="eventRegInput1" class="form-control col-md-6" value="ADMN<?php echo($imp_id);?>" name="idAdmin" readonly>
                        </div>
                        <div class="form-group">
                          <label for="eventRegInput1">Full Name</label>
                          <input type="text" id="eventRegInput1" class="form-control col-md-6" placeholder="full name" name="fullname">
                        </div>
                        <div class="form-group">
                          <label for="eventRegInput2">Username</label>
                          <input type="text" id="eventRegInput2" class="form-control col-md-6" placeholder="username" name="username">
                        </div>
                        <div class="form-group">
                          <label for="eventRegInput3">Password</label>
                          <input type="password" id="eventRegInput3" class="form-control col-md-6" placeholder="password"
                          name="password">
                        </div>
                        <div class="form-group">
                          <label for="eventRegInput4">Email</label>
                          <input type="email" id="eventRegInput4" class="form-control col-md-6" placeholder="email"
                          name="email">
                        </div>
                        <div class="form-group">
                          <label for="eventRegInput5">Contact Number</label>
                          <input type="tel" id="eventRegInput5" class="form-control col-md-6" name="contact" placeholder="contact number">
                        </div>
                        <div class="form-group">
                          <label>Organizational Role</label>
                          <div class="input-group">
                            <div class="d-inline-block custom-control custom-radio mr-1">
                              <input type="radio" name="orgrole" value="Operations Manager" class="custom-control-input" id="yes1">
                              <label class="custom-control-label" for="yes1">Operations Manager</label>
                            </div>
                            <div class="d-inline-block custom-control custom-radio">
                              <input type="radio" name="orgrole" value="Accountant" class="custom-control-input" id="no1">
                              <label class="custom-control-label" for="no1">Accountant</label>
                            </div>
                          </div>
                        </div>

               <div class="form-group"> 
              <label for="">Upload Image</label><br>
                <input type="file" name="image" class="form-control col-md-5"></div><br><br>
                      </div>
  <input type="hidden" name="_token" value="{{csrf_token()}}">

                      <div class="form-actions center">
                       <input type="reset" name="reset" value="RESET" class="btn btn-warning mr-1 ft-x"> 
                     <input type="submit" name="submit" value="SAVE" class="btn btn-primary mr-1 la la-check-square-o">
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>