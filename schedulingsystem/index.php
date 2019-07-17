<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>
<head>
<style>

body {
	background-image: url();
	background-color: white;
}
</body>
</style>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

<body>

	<nav class="navbar navbar-default navbar-static-top" style="background-color:#2869d1;">
	  <div class="container">
	  <h3 style="color:white;"><Center>WordDesk</Center></h3>
	  </div>
	</nav>
	
	 <br><div class="container"> 
  <div class="row" align="center">
 <div class="col-lg-12">
		<div class="jumbotron" style="background-color:#a8c2ed; color:white;">
		<form class="form-horizontal" method="post" action="login.php">
			<fieldset>

			 <legend style="color:white; font-size:2.2em;">Login Panel</legend>

			
			<br><div class="form-group">
			  <label class="col-md-4 control-label" for="username">Staff Login</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Staff Password</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group" align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-primary " value="Login">
			  </div>
			</div>

			</fieldset>
		</form>
            </div>
     </div>
      </div>
    
		
	

	
		</div>
	</div>
</body>
</html>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
