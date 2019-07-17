<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
</head>
<body>
 
 <br><div class="container"> 
  <div class="row" align="center">
    <div class="col-lg-12">
		<div class="jumbotron" style="background-color:#a8c2ed; color:white;">
              <legend style="color:white; font-size:2.2em;">Add Staff Members<p style="font-size:0.5em;">Here you can add staff members to the system</p></legend>
				<form class="form-horizontal" method= "post" action="add.staff.php">
				<fieldset>

				<!-- Form Name -->
				
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="falname">Staff Login</label>  
				  <div class="col-md-5">
				  <input id="stafflogin" name="stafflogin" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
                    	<div class="form-group">
				  <label class="col-md-4 control-label" for="falname">Staff Name</label>  
				  <div class="col-md-5">
				  <input id="staffname" name="staffname" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Designation">Staff Password</label>  
				  <div class="col-md-5">
				  <input id="staffpassword" name="staffpassword" type="text" placeholder="" class="form-control input-md" required="">
				  <span class="help-block"></span>  
				  </div>
				</div>
                    <div class="form-group">
				  <label class="col-md-4 control-label" for="Designation">Admin Privileges</label>  
				  <div class="col-md-1">
				  <input id="isadmin" name="isadmin" type="checkbox" placeholder="" required=""> 
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-primary">Add Staff Member</button>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
    </div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>