<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="css\footer.css">
    <link rel="stylesheet" type="text/css" href="css\project.css">
<body>

<form method="post" action="">
	<div class="box">
 <span class="login100-form-title">
            Member Login
        </span>
		
	<input name="username" type="text" id="username" placeholder="Type your Username" class="center">
        <br>
        <input name="password" type="password" id="password"  placeholder="Type your Password" class="center">
        <br><br>
  
        <input type="submit" name="someAction" class="loginbutton" value="Submit" /> 
        
        <h4 class="center"><a style="text-decoration:none" href="registration.php">Don't have an account? Register.</a> </h4> <br> <br>
    </form>
	  


</body>
<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>
</html>

<?php
session_start();
$name = $_POST['username'];
$pass = $_POST['password'];
$_SESSION['id'] ="0";

 if($_SERVER['REQUEST_METHOD'] == "POST")	{

		$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
		$query = "SELECT * FROM user WHERE  username = '$name' AND   password = '$pass'";
		
		$result = mysqli_query ($connect, $query);
		
		if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);
		
		if( $row['username'] ==='admin' &&  $row['password']==='admin'){
			$_SESSION['id'] = $row['id'];
			header( 'Location:admin.php' );
			
		}else{

		$_SESSION['id'] = $row['id'];
		header( 'Location:profile.php' );
		
			}
		}

		mysqli_close($connect);

 

  
}
?>