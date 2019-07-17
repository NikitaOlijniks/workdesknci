<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
</head>
<body>
            <div align="center">
            <legend>List of Staff Members</legend></fieldset>
			<?php
				include_once("stafflist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Tasks</legend></fieldset>
			<?php 
              include_once("tasklist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Shift Times</legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>