<!DOCTYPE html>
<html>
<head>
<title>Records Added</title>
</head>
<body>
<?php

require 'connection.php';
$conn = Connect();

$id = mysqli_real_escape_string($conn, $_REQUEST['Studentid']);
$fname = mysqli_real_escape_string($conn, $_REQUEST['FirstName']);
$mname = mysqli_real_escape_string($conn, $_REQUEST['MiddleName']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['LastName']);
$sex = mysqli_real_escape_string($conn, $_REQUEST['Sex']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['DOB']);
$branch = mysqli_real_escape_string($conn, $_REQUEST['Branch']);
$gpa = mysqli_real_escape_string($conn, $_REQUEST['gpa']);

$sql = "UPDATE php_test.student set first_name = '$fname', middle_name = '$mname', last_name = '$lname', sex = '$sex', dob = '$dob', branch = '$branch', gpa = '$gpa' where studentid = '$id'";

if(mysqli_query($conn,$sql)){
	echo "Record updated successfully.";
} else{
	echo "ERROR:  Could not able to execute $sql." .mysqli_error($conn);
}


mysqli_close($conn)
?>

<form action="index.php" method="post">
<input type="Submit" value="Back">
</form>
</body>
</html>