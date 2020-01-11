<html>
	<head>
		<meta charset="utf-8">
		<title>Insecure Code for XSS </title>
	</head>

	<body>
		<h2>Insecure Code for XSS</h2>
		<table>
			<form action="" method="post">
				<tr>
					<td> 1st Input : </td><td><input type="text" name="param1"></td>
					<td><button name='xxx' value='0'>1st_Submit</button></td>
				<td>
			</form>
					<?php
					if(isset($_POST['xxx'])){
					 	$Param1 = $_POST["param1"];
					 	echo "Your 1st Input is = ". $Param1 .'</br>';
					}
				 ?>
				</td>
				</tr>

				<tr>
					<td> 2nd Input : </td><td><input id="Second_IP"></td>
					<td><button id="p2xss" class="button">2nd_Submit</button></td>
					<td> <div id="p2"></div></td>
				</tr>
				<tr>
					<td>3rd Input : </td><td><input id="Third_IP"></td>
					<td><button id="p3xss" class="button">3rd_Submit</button></td>
					<td><div id="p3"></div></td>
				</tr>
		</table>
		
		<script>
			function param2() {
			    var a = document.getElementById('Second_IP').value;
			        var b = a.replace(/[a]/g, '');
			        var c ='<font color="red"> Your 2nd Entered Input is: '+b+'</font>.';
			        document.getElementById('p2').innerHTML = c;
			    }
			document.getElementById('p2xss').addEventListener('click', param2);

				
			function escape() {
			    var js_filter0 = document.getElementById('Third_IP').value;
			        var js_filter1 = js_filter0.replace(/[()>]/g, '');
			        var html ='<font color="red"> Your 3rd Entered Input is: '+js_filter1+'</font>.';
			        document.getElementById('p3').innerHTML = html;
			    }
			document.getElementById('p3xss').addEventListener('click', escape);
		</script>
	</body>
</html>