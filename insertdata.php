<!DOCTYPE html>
<html>
<head>
<title>Add Student Record</title>
</head>
<body>
<h3>Insert Student Data</h3>
<form action="insert.php" method = "post">
<table width = 75%>
<tr><td>Student ID:</td>
<td><input type = "text" name="studentid" id="studentid" required></td></tr>
<tr><td>First Name:</td>
<td><input type="text" name="first_name" id="firstName" required></td></tr>
<tr><td>Middle Name:</td>
<td><input type="text" name="middle_name" id="middleName"></td></tr>
<tr><td>Last Name:</td>
<td><input type="text" name="last_name" id="lastName" required></td></tr>
<tr><td>Sex:</td>
<td><input type="text" name="sex" id="sex" required></td></tr>
<tr><td>Date of birth:</td>
<td><input type="Date" name="dob" id="dob" required></td></tr>
<tr><td>Branch:</td>
<td><input type="text" name="branch" id="branch" required></td></tr>
<tr><td>GPA:</td>
<td><input type="text" name="gpa" id="gpa" required></td></tr><br><br>
</table>
<br>
<input type="submit" value="Insert"><br><br>
</form>
<form action="index.php" mehtod="post">
<input type="submit" value="Back">
</form>

</body>
</html>