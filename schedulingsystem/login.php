<?php
session_start();
 include('config.php');
    $dbhost = DBHOST;
    $dbusername = DBUSER;
    $dbpassword = DBPWD;
    $dbdatabase = DBNAME;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  if ($username&&$password)
  {
	 $connect = mysqli_connect ($dbhost, $dbusername, $dbpassword, $dbdatabase)or die("couldn't connect to the database!");
	 
	 $query = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username'");
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
             $dbfullname = $row['full_name'];
             $dbtype = $row['type'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
             if($dbtype=="Admin"){
                 header("Location: home.php");
             }
             else{
                 header("Location: weekoverview.php");
             }
			 
			 $_SESSION['username'] = $dbusername;
             $_SESSION['fullname'] = $dbfullname;
              $_SESSION['type'] = $dbtype;
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="index.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("That user dont exist!");
                         location="index.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter a username and password!");
                         location="index.php";
                           </script>');
  
	  	 
?>
