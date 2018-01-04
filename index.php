<!DOCTYPE html>
<html>
<head>
<title>Student Data</title>
</head>
<body>

<h3>Student form</h3>
<form name = f1 action= "../viewdata.php" method = "post">
	Enter the Student ID to view or update the record<br><br>
	<input type = "text" name = "studentid" required><br><br>

	<input type = "submit" value = "View">
	<input type = "submit" value = "Update Record" onClick="f1.action='../updaterecord.php'; return true;"><br><br>
		
</form>

<form action="../insertdata.php" method= "post">
	<input type = "submit" value = "Insert New Record">
</form>

</body>
</html>
