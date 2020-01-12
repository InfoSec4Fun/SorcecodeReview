<?php
//include "english.php";
//include "french.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sec_FInclusion</title>
</head>
<body>
 <form method="get" action="#">
  <h2>Secure Code for  All 3 Challenges </h2>
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
    // Whitelist Input validation to resolve File Inclusion vulnerabilities.
    if($file == "english.php" || $file == "french.php" ){
      include($file);
    }
    else{
           echo "ERROR: File not found!";
      exit;
    }
  }

?>

</body>
</html>