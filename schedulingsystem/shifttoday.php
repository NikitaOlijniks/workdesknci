<?php
   include_once("header.php");
   include_once("navbar.php");
 session_start();
?>
<html>
<head>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body><br>
<div align="center">
			<fieldset>
              <legend style="color:black; font-size:2.2em;">Your Shift Today<p style="font-size:0.5em;">System day is <?php echo date('l');?></p><p style="font-size:0.5em;">You are logged in as <?php echo $_SESSION['fullname'];?></p></legend>
<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
                 include('config.php');
                $host = DBHOST;
                $username = DBUSER;
                $password = DBPWD;
                $database = DBNAME;
			   
               // select database
			   $connect = mysqli_connect($host,$username,$password, $database) or die(mysqli_error()); 
        
                    $fullname = $_SESSION['fullname'];
                    $today = date('l');
                    $query = ("SELECT * FROM addtable WHERE faculty='$fullname' AND subject='$today'");
                    $result = mysqli_query($connect, $query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
								<th>Day of The Week</th>
								<th>Start time</th>
								<th>End time</th>
                                 <th>Task</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['subject'] . "</td>";
						echo "<td>" . $row['start_time'] . "</td>";
						echo "<td>" . $row['end_time'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		
    }
    if(isset($_POST['id']))
    {
    $id = mysqli_real_escape_string($connect,$_POST['id']);
    $sql = mysqli_query($connect,"DELETE FROM addtable WHERE id='$id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error());
    }
header("Location: tablelist.php");
    }
    ?>
</fieldset>
</form>
</div>
</div>
</div>

<div align="center">
<br>
<a href="index.php"><input type='submit' class='btn btn-primary' name='delete' value='Logout'></a>
</div>
</div>
	</body>
	</html>
	
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
