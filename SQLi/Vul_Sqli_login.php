<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>SQL Injection</title>
</head>
<body>
<h2>Insecure Code for Sqli</h2>
<form method="post" action="Vul_login_action.php">
<table id="box-table-a">
<tr>
	<td>User Name:&nbsp;</td>
	<td><input type="text" name="username" size="25"></td>
</tr>
<tr>
	<td>Password:&nbsp;</td>
	<td><input type="password" name="password" size="25"></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input type="submit" name="submit" value="Log In" class="button"></td>
</tr>
</table>
</form>
</body>
</html>
