<?php
session_start();
$pro_id=$_REQUEST["up"];
include("dbConnect.php");
$obj =new adb();
$obj->connect();

echo "$pro_id";		
$_SESSION["upd"] = $pro_id;
		

	?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<form action = "update.php" method = "GET">
		<div> Course_title: <input type ="text" name ="pn"></div><br>
		
		<div>Course Description:</div><br>
		<div><textarea name = "pd" cols = '30' rows ='5'></textarea></div><br>
		<div>Course Objective:</div><br>
		<div><textarea name = "pd" cols = '30' rows ='5'></textarea></div><br>
		<div>
		<div>Semester:</div>
		<input type ="radio" name="semester" value="fall">Fall<br>
		<input type ="radio" name="semester" value="spring">Spring
		</div>
		<br>
		<div>
		<div>Program:</div>
		<input type ="radio" name="pro" value="BA">BA<br>
		<input type ="radio" name="pro" value="CS">CS<br>
		<input type ="radio" name="pro" value="MIS">MIS<br>
		<input type ="radio" name="pro" value="ART">ART
		</div>
		<br>
		<div><input type ="submit" value ="update"></div>
	</form>
	
</body>
</html>


