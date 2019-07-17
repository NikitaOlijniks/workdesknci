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

 $staffname = $_POST['staffname'];
 $staffpassword = $_POST['staffpassword'];
 $stafflogin = $_POST['stafflogin'];
 $isadmin = $_POST['isadmin'];

 if(isset($isadmin)){
      $sql = "INSERT INTO admin (username, full_name, password, type) VALUES ('$stafflogin', '$staffname', '$staffpassword', 'Admin')";
 }
else{
    $sql = "INSERT INTO admin (username, full_name, password) VALUES ('$stafflogin', '$staffname', '$staffpassword')";
}
 

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("New Faculty Added!'.$isadmin.'");
                         location="home.php";
                           </script>';
 }


?>