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
            <legend style="color:black; font-size:2.2em;">Weekly Overview For All Staff</legend>
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
        

                    $query = ("SELECT * FROM addtable");
                    $result = mysqli_query($connect, $query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Staff Name</th>
								<th>Day of The Week</th>
								<th>Start time</th>
								<th>End time</th>
                                 <th>Task</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
						echo "<td>" . $row['start_time'] . "</td>";
						echo "<td>" . $row['end_time'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

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
