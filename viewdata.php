<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>
</head>
<h3>Student Details</h3>
<body>
<?php

require 'connection.php';
$conn = Connect();

$id = $conn->real_escape_string($_POST['studentid']);
$query = "SELECT * FROM php_test.student where studentid = '$id'";
$result = mysqli_query($conn,$query) or die (mysql_error());

while($row = mysqli_fetch_array($result)){
?>

<form action="index.php" method="post">
<table width=75%>
<tr><td>Student ID:</td> 
<td><input type = "text" name = "Studentid" value="<?php echo $row['studentid']; ?>" readonly></td></tr>
<tr><td>First Name:</td>
<td><input type = "text" name = "FirstName" value="<?php echo $row['first_name']; ?>" readonly></td></tr>
<tr><td>Middle Name:</td>
<td><input type = "text" name = "MiddleName" value="<?php echo $row['middle_name']; ?>" readonly></td></tr>
<tr><td>Last Name:</td>
<td><input type = "text" name = "LastName" value="<?php echo $row['last_name']; ?>" readonly></td></tr>
<tr><td>Sex:</td>
<td><input type = "text" name = "Sex" value="<?php echo $row['sex']; ?>" readonly></td></tr>
<tr><td>Date of Birth:</td>
<td><input type = "text" name = "DOB" value="<?php echo $row['dob']; ?>" readonly></td></tr>
<tr><td>Branch:</td>
<td><input type = "text" name = "Branch" value="<?php echo $row['branch']; ?>" readonly></td></tr>
<tr><td>GPA:</td>
<td><input type = "text" name = "gpa" value="<?php echo $row['gpa']; ?>" readonly></td></tr>
</table><br>
<input type = "submit" name = "submit" value="Back">

</form>
<?php
}
?>

</body>
</html>