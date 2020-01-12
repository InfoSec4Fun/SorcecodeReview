<?php
//include "english.php";
//include "french.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vul_FInclusion</title>
</head>
<body>
	<form method="get" action="#">
		<h2>Challenge-I</h2>
   	<select name="page">
      	<option value="english">English</option>
    	<option value="french">French</option>

      	...
   	</select>
   	<input type="submit">
</form>
<?php
  if(isset($_GET["page"])){
	  $file=$_GET["page"].".php";
	  //Simulate null byte issue
	  $file=preg_replace('/\x00.*/',"",$file);
	  include($file);
  }
?>

<form method="get" action="#">
	<h2>Challenge-II</h2>
   	<select name="file">
   		<option value="english">English</option>
      	<option value="french">French</option>

      	...
   	</select>
   	<input type="submit">
</form>
<?php
  	if(isset($_GET["file"])){
	  $file=$_GET["file"].".php";
	  //Simulate null byte issue
	  $file = str_replace( array( "http://", "https://" ), "", $file );
	  $file = str_replace( array( "../", "..\"" ), "", $file );
	  $file=preg_replace('/\x00.*/',"",$file);
	  include($file);
  }
?>
<form method="get" action="#">
	<h2>Challenge-III</h2>
   	<select name="language">
   		<option value="english.php">English</option>
      	<option value="french.php">French</option>

      	...
   	</select>
   	<input type="submit">
</form>
<?php
	if(isset($_GET["language"])){
		// The page we wish to display
		$file=$_GET["language"];
		// Input validation
		if(!fnmatch("file*", $file ) && $file != "include.php" && $file!="english.php"  && $file != "french.php" ){
			// This isn't the page we want!
			echo "ERROR: File not found!";
			exit;
		}
		else{
			
			if($file!="english.php" && $file!="french.php" && $file != "include.php"){
				echo '<h2 style="color:green">Congrulation..! You have successfully completed Challenge-III</h2>';	
				
			}
			else{
				echo '<h4 style="color:red">Try Harder to complete This Challenge-III</h4>';
			}
			include($file);
		}
	}

?>

</body>
</html>