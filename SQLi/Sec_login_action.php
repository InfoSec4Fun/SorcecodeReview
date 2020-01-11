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

$sql = "SELECT * FROM user_info WHERE username = ? AND passcode = ?"; 
$hand= $db->prepare($sql);
$hand->bind_param('ss',$SCR_username, $SCR_password);
$hand->execute();
//$hand->mysqli_bind_result($SCR_username, $SCR_password);

if($hand->fetch() >= 1)
{
	echo "You have Successfully login into system\n";

	//echo $SCR_username, ' ', $SCR_password;
	  echo '
	  <html>
	  <body> 
	  	<script type="text/javascript">
	  		function MySysDate(){
	  			document.getElementById("dt").innerHTML=Date();
	  		}
	  	</script>
	  	<p id="dt">Click the Button to display the System Date & Time </p>
	  	<button onclick="MySysDate()">Click Date</button>
	  </body>
	  </html>

	  <table>
       <tr><th>Username</th><th>Password</th></tr>
       <tr><td>'.$SCR_username.   '</td><td>'.$SCR_password.'</td></tr>
    </table>';
	//header ("Location: index.php?success");
}
else
{
	//<script> alert("You have entered Invalid Credentials") </script>;
	//echo "Please Enter Valid Credentials";	
	header ("Location: Sec_Sqli_login.php?error");
}
//Preparing the statement

