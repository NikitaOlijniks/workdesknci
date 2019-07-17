<?php 

 include('config.php');
    $hostname = DBHOST;
    $username = DBUSER;
    $password = DBPWD;
    $databaseName = DBNAME;

 $con = mysqli_connect ($hostname, $username, $password);
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, $databaseName))
 {
	 echo 'database not selected';
 }

 $task_code = $_POST['taskcode'];
 $task_desc = $_POST['taskdesc'];
 
 $sql = "INSERT INTO tasks (task_code, task_desc) VALUES ('$task_code', '$task_desc')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("New Task Added!");
                         location="home.php";
                           </script>';
 }


?>