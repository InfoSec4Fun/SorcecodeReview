<?php
# create a session cookie
session_start();
include 'db.php';

if ( isset($_POST['username'])  ){
	$SCR_username = $_POST['username'];
}

if ( isset($_POST['password']) ) {
	$SCR_password = $_POST['password'];
}

$sql = "SELECT * FROM user_info WHERE username = '$SCR_username' AND passcode = '$SCR_password';"; 
$result = mysqli_query($db,$sql);
//$row = $result->fetch_assoc();
$count = mysqli_num_rows($result);
if($count >= 1)
{
	if($SCR_username=="admin" || $SCR_username=="appsec"){
		echo "You have Successfully login into system";
		echo '<h3>'. $SCR_username, ' ', $SCR_password .'</h3>';
	}
	else{
		echo "<h2>You have Successfully Executed SQL Injection</h1>";
		echo '<h3>'. $SCR_username, ' ', $SCR_password .'</h3>';
	}
	//header ("Location: index.php?success");
}
else
{
	//<script> alert("You have entered Invalid Credentials") </script>;
	//echo "Please Enter Valid Credentials";	
	header ("Location: Vul_Sqli_login.php?error");
}

?>

