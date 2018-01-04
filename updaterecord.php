<!DOCTYPE html>
<html>
<head>
<title>Edit Student Details</title>
</head>
<h3>Edit Student Details</h3>
<body>
<?php

require 'connection.php';
$conn = Connect();

$id = $conn->real_escape_string($_POST['studentid']);
$query = "SELECT * FROM php_test.student where studentid = '$id'";
$result = mysqli_query($conn,$query) or die (mysql_error());

while($row = mysqli_fetch_array($result)){
?>
<form action="update.php" method="post">
<table width=75%>
<tr><td>Student ID:</td> 
<td><input type = "text" name = "Studentid" value="<?php echo $id; ?>" readonly></td></tr>
<tr><td>First Name:</td>
<td><input type = "text" name = "FirstName" value="<?php echo $row['first_name']; ?>"></td></tr>
<tr><td>Middle Name:</td>
<td><input type = "text" name = "MiddleName" value="<?php echo $row['middle_name']; ?>"></td></tr>
<tr><td>Last Name:</td>
<td><input type = "text" name = "LastName" value="<?php echo $row['last_name']; ?>"></td></tr>
<tr><td>Sex:</td>
<td><input type = "text" name = "Sex" value="<?php echo $row['sex']; ?>"></td></tr>
<tr><td>Date of Birth:</td>
<td><input type = "text" name = "DOB" value="<?php echo $row['dob']; ?>"></td></tr>
<tr><td>Branch:</td>
<td><input type = "text" name = "Branch" value="<?php echo $row['branch']; ?>"></td></tr>
<tr><td>GPA:</td>
<td><input type = "text" name = "gpa" value="<?php echo $row['gpa']; ?>"></td></tr>
</table><br>
<input type = "Submit" name = "update" value="Update">

</form>
<?php


}



?>

<form action="index.php" method="post">
<input type="Submit" value="Back">



</body>
</html>