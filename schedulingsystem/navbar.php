<?php 
 include_once("header.php");
 session_start();
?>

<html>
<head>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default" style="background-color:#2869d1; color:white;">
    <div class="container-fluid">
          <?php 
        $dbusername = $_SESSION['username'];
        $dbfullname = $_SESSION['fullname'];
        $dbtype = $_SESSION['type'];
    
	
	
        
        if($dbtype == "Admin"){
        ?>
        <div class="navbar-header">
      <a style="color:white;" class="navbar-brand" href="home.php"><!--BUPC --> WordDesk - Admin</a>
    </div>
    <div>
    <ul class="nav navbar-nav">
        <li><a style="color:white;" href="home.php"><span class="glyphicon glyphicon-time"></span>Assign Shift/Task</a></li>
        <li><a style="color:white;" href="addstaff.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Staff</a></li> 
        <li><a style="color:white;" href="addtask.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Tasks</a></li>
		<li><a style="color:white;" href="addtime.php"><span class="glyphicon glyphicon-time"></span> Add Shift</a></li>
        <li><a style="color:white;" href="list.php"><span class="glyphicon glyphicon-list"></span> Database List</a></li>
        <li><a style="color:white;" href="tablelist.php"><span class="glyphicon glyphicon-calendar"></span>Overall Schedule</a></li>
		
    	</ul>
        <?php
        }
        else{
        ?>
        <div class="navbar-header">
      <a style="color:white;" class="navbar-brand" href="weekoverview.php"><!--BUPC --> WordDesk</a>
    </div>
    <div>
         <ul class="nav navbar-nav">
        <li><a style="color:white;" href="weekoverview.php"><span class="glyphicon glyphicon-calendar"></span>Weekly Schedule</a></li>
             <li><a style="color:white;" href="shifttoday.php"><span class="glyphicon glyphicon-calendar"></span>Your Shift Today</a></li>
		
    	</ul>
        <?php
        }
        ?>
		<ul class="nav navbar-nav navbar-right">
		<li><a style="color:white;" href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul></div>
  </div>
</nav>

</body>
</html>





