<?php
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>

body {
    background-image: url();
    background-color: white;
}
th {
    text-align: center;
}
tr {
     height: 30px;
}
td {
    padding-top: 5px;
    padding-left: 20px; 
    padding-bottom: 5px;    
    height: 20px;
}


</body>
</style>
</head>
<body><br>
<div class="container">

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
               $connect = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 
               

                    $query = ("SELECT * FROM tasks");
                    $result = mysqli_query($connect, $query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Task Code</th>
                                <th>Task Description</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        
                        echo "<td>" . $row['task_code'] . "</td>";
                        echo "<td>" . $row['task_desc'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='tasklist.php'>
                        <input name='task_id' type='hidden' value='".$row['task_id']."';>
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
      header('Location: list.php');
    }
    if(isset($_POST['task_id']))
    {
    $task_id = mysqli_real_escape_string($connect, $_POST['task_id']);
    $sql = mysqli_query($connect, "DELETE FROM tasks WHERE task_id='$task_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error());
    }
    
    }
    ?>
</fieldset>
</form>
</div>
</div>
</div>
</div>
    </body>
    </html>
    
<?php
   include_once("footer.php");

?>
