<?php
   include_once("header.php");
   include_once("navbar.php");
  
?>
<html>
<head>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body><br>
<div align="center">
			<fieldset>
           <legend style="color:black; font-size:2.2em;">Overall Staff Schedule</legend>
<body>
    <?php
     echo "<tr>
            <td>";
     include('config.php');
                $host = DBHOST;
                $username = DBUSER;
                $password = DBPWD;
                $database = DBNAME;
			   
               // select database
			   $connect = mysqli_connect($host,$username,$password, $database) or die(mysqli_error()); 
        

                    $query = ("SELECT * FROM addtable");
                    $result = mysqli_query($connect, $query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Staff Name</th>
								<th>Day of The Week</th>
								<th>Start time</th>
								<th>End time</th>
                                 <th>Task</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
						echo "<td>" . $row['start_time'] . "</td>";
						echo "<td>" . $row['end_time'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='tablelist.php'>
                        <input name='id' type='hidden' value='".$row['id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
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
<a href="home.php"><input type='submit' class='btn btn-success' name='delete' value='New'></a>
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
