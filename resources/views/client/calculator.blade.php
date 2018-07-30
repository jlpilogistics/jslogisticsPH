@extends('layouts.master')

@section('content')
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section shop-section">
					<div class="our-location ">
						<div class="container">
							<h4>Rate Calculator</h4><br>
							<div class="row">
				<!--Content here-->	
					<div class="col-sm-4">
                      <button type="submit" class="comment-submit qoute-sub " onclick=" myFunction()"> 
                      	<i class="fa fa-sign-in"  style="font-size:20px"> Import</i>
                      </button></div>

                      	<div class="col-sm-4">
                      <button type="submit" class="comment-submit qoute-sub "  onclick="myFunction2()"> 
                      	<i class="fa fa-sign-out"  style="font-size:20px"> Export</i>
                      </button></div>

                      <div class="col-sm-4">
                      <button type="submit" class="comment-submit qoute-sub " onclick="myFunction3()" > 
                      	<i class="fa fa-road"  style="font-size:20px"> Domestic</i>
                      </button></div>
<!--Import section -->
                      <div id="hide" style="display:none">
               		<div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-success " onclick="importfield()" > 
                      	<i class="fas fa-plane-arrival"  style="font-size:20px"> Air</i>
                      </button></div>

                      <div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-primary " onclick="oceanfield()" > 
                      	<i class="fas fa-ship"  style="font-size:20px"> Ocean</i>
                      </button></div>
                       <div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-default " > 
                      	
                      </button></div>
                      </div>  <!--import section end -->

                      <!--Export section -->
                   <div id="hide2" style="display:none">
               		<div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-success "   onclick="importfield()"> 
                      	<i class="fas fa-plane-arrival"  style="font-size:20px"> Air</i>
                      </button></div>

                      <div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-primary " onclick="oceanfield()" > 
                      	<i class="fas fa-ship"  style="font-size:20px"> Ocean</i>
                      </button></div>

                        <div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-default " > 
                      	
                      </button></div>
                      </div>
                        <!--export section end-->
  <!--Domestic section -->
                     <div id="hide3" style="display:none">
               		<div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-success "  onclick="importfield()" > 
                      	<i class="fas fa-plane-arrival"  style="font-size:20px"> Air</i>
                      </button></div>

                      <div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-primary " onclick="oceanfield()"> 
                      	<i class="fas fa-ship"  style="font-size:20px"> Ocean</i>
                      </button></div>

                      <div class="col-sm-4"><br><br>
                      <button type="submit" class="btn btn-warning " onclick="importfield()" > 
                      	<i class="fas fa-truck-moving"  style="font-size:20px"> Land</i>
                      </button></div>

                      </div>
  <!--Domestic section end -->
  	<!-- air import field section -->
       <div id="field1" style="display:none">
       	<div class="row">
            <div class="col-sm-3"><br><br>
            <div class="form-group">

           	<select name="desc" id="desc" class="form-control">
             <option value="">Choose Origin:</option>
             <option value="Philippines">Philippines</option>
              <option value="Norway">Norway</option>
              <option value="San Francisco">San Francisco</option>
              <option value="Italy">Italy</option>
              <option value="Brazil">Brazil</option>
              <option value="Singapore">Singapore</option>
              <option value="Hongkong">Hongkong</option>
           </select>
          </div>
          </div>

            <div class="col-sm-3"><br><br>
            <div class="form-group">
           	<select name="desc" id="desc" class="form-control">
             <option value="">Destination:</option>
             <option value="Philippines">Philippines</option>
              <option value="Norway">Norway</option>
              <option value="San Francisco">San Francisco</option>
              <option value="Italy">Italy</option>
              <option value="Brazil">Brazil</option>
              <option value="Singapore">Singapore</option>
              <option value="Hongkong">Hongkong</option>
           </select>
          </div></div>

            <div class="col-sm-3"><br><br>
            <div class="form-group">
           	<select name="desc" id="desc" class="form-control">
             <option value="">Commodity:</option>
             <option value="Bags">Bags</option>
              <option value="Shoes">Shoes</option>
              <option value="Furniture">Furniture</option>
              <option value="Signage">Signage</option>
           </select>
          </div></div>

         <div class="col-sm-3"><br><br>
         <div class="form-group">
         <input type="number" name="quantity" class="form-control" placeholder="Quantity">
          </div></div>
          <div class="col-sm-3"><br><br>
         <div class="form-group">
         <input type="number" name="height" class="form-control" placeholder="Height">
          </div></div>
		<div class="col-sm-3"><br><br>
         <div class="form-group">
         <input type="number" name="weight" class="form-control" placeholder="Weight">
          </div></div>
                      </div>
                      </div>
  <!-- field section end-->

  	<!-- ocean  field section -->
       <div id="field2" style="display:none">
            <div class="col-sm-3"><br><br>
            <div class="form-group">
           	<select name="desc" id="desc" class="form-control">
             <option value="">Choose Origin:</option>
             <option value="Philippines">Philippines</option>
              <option value="Norway">Norway</option>
              <option value="San Francisco">San Francisco</option>
              <option value="Italy">Italy</option>
              <option value="Brazil">Brazil</option>
              <option value="Singapore">Singapore</option>
              <option value="Hongkong">Hongkong</option>
           </select>
          </div>
          </div>

            <div class="col-sm-3"><br><br>
            <div class="form-group">
           	<select name="desc" id="desc" class="form-control">
             <option value="">Destination:</option>
             <option value="Philippines">Philippines</option>
              <option value="Norway">Norway</option>
              <option value="San Francisco">San Francisco</option>
              <option value="Italy">Italy</option>
              <option value="Brazil">Brazil</option>
              <option value="Singapore">Singapore</option>
              <option value="Hongkong">Hongkong</option>
           </select>
          </div></div>

            <div class="col-sm-3"><br><br>
            <div class="form-group">
           	<select name="desc" id="desc" class="form-control">
             <option value="">Commodity:</option>
             <option value="Bags">Bags</option>
              <option value="Shoes">Shoes</option>
              <option value="Furniture">Furniture</option>
              <option value="Signage">Signage</option>
           </select>
          </div></div>

         <div class="col-sm-3"><br><br>
         <div class="form-group">
         <input type="number" name="quantity" class="form-control" placeholder="Quantity">
          </div></div>
          <div class="col-sm-3"><br><br>
         <div class="form-group">
         <input type="number" name="height" class="form-control" placeholder="Height">
          </div></div>
		<div class="col-sm-3"><br><br>
         <div class="form-group">
         <input type="number" name="weight" class="form-control" placeholder="Weight">
          </div></div>
           <div class="col-sm-3"><br><br>
            <div class="form-group">
           	<select name="fcl" id="desc" class="form-control">
             <option value="">Container Type:</option>
             <option value="FCL">FCL</option>
             <option value="FCL 20">FCL 20</option>
             <option value="FCL 40">FCL 40</option>
              <option value="LCL">LCL</option>
           </select>
          </div></div>
                      </div>
  <!--export field section end-->

						</div>
						</div>
					</div>
				</div>
  <!--Javascript -->
<script>
function myFunction() {
    var x = document.getElementById("hide");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction2() {
    var x = document.getElementById("hide2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function myFunction3() {
    var x = document.getElementById("hide3");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function importfield() {
    var x = document.getElementById("field1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function oceanfield() {
    var x = document.getElementById("field2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script><!--/Javascript -->
				<!--Section box ends Here -->
		</div>

@endsection