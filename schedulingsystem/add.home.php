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
mysqli_select_db($con, $databaseName) or die(mysql_error());
	 

 function getPosts()
   {
    $posts = array();
    $posts[0] = $_POST['faculty'];
    $posts[1] = $_POST['course'];
    $posts[2] = $_POST['subject'];
	  $posts[4] = $_POST['start_time'];
	  $posts[5] = $_POST['end_time'];
    return $posts;
}

if (isset($_POST['insert'])) {
	
	$data = getPosts();


    $insert_Query = "INSERT INTO `addtable` (`faculty`, `course`, `subject`, `start_time`, `end_time`) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[4]', '$data[5]')";
    $insert_Result = mysqli_query($con, $insert_Query);
    
    if ($insert_Result) {
     header("Location: tablelist.php");
    } else {
      echo "<script type='text/javascript'>
                      alert('Data not inserted!');
                         window.location='home.php';
                           </script>";
    }


  
  }
?>