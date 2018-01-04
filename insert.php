<!DOCTYPE html>
<html>
<head>
<title>Records Added</title>
</head>
<body>
<?php

require 'connection.php';
$conn = Connect();

$id = mysqli_real_escape_string($conn, $_REQUEST['studentid']);
$fname = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$mname = mysqli_real_escape_string($conn, $_REQUEST['middle_name']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
$branch = mysqli_real_escape_string($conn, $_REQUEST['branch']);

if(!(strlen($id)==9)){
	echo "Length of the studentid must be 9";
}
else{
$sql = "INSERT into php_test.student values ('$id','$fname','$mname','$lname','$sex','$dob','$branch','$gpa')";

if(mysqli_query($conn,$sql)){
	echo "Records added successfully.";
} else{
	echo "ERROR:  Could not able to execute $sql." .mysqli_error($conn);
}

}

mysqli_close($conn)
?>

<form action="index.php" method="post">
<input type="Submit" value="Back">
</form>

</body>
</html>