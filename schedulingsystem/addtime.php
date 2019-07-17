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
<body>
 
 <br><div class="container"> 
  <div class="row" align="center">
    <div class="col-lg-12">
		<div class="jumbotron" style="background-color:#a8c2ed; color:white;">
               <legend style="color:white; font-size:2.2em;">Add Shift Times<p style="font-size:0.5em;">Here you can add shift times to the database</p></legend>
				<form class="form-horizontal" method= "post" action="add.time.php">
				<fieldset>

				<!-- Form Name -->

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="starttime">Start time</label>  
				  <div class="col-md-5">
				  <input id="starttime" name="starttime" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="endtime">End time</label>  
				  <div class="col-md-5">
				  <input id="endtime" name="endtime" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-primary">Add Time</button>
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