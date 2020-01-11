<html>
	<link rel="stylesheet" type="text/css" href="css\footer.css">
	<link rel="stylesheet" type="text/css" href="css\project.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<style type="text/css">
		.bs-example {
			margin: 20px;
		}
		
		body {
			padding-top: 70px;
		}
	</style>
<body>
	<h1 class="center">User Update</h1>
	<form method='post'>
			
		<span class="center">	Enter new Username:</span> <input type="text"  class="center" name="username" value="username"/><br>
			  
		<span class="center"> 	Enter new Password:</span> <input type="password" class="center" name="password" value="password"/><br>
			  
		<input type="submit" name="submit" class="center" value="Submit" /> <br>
		<input type="submit" name="cancel" class="center" value="Cancel" />
	</form>

</body>
<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>
</html>

<?php
$id = $_GET['user_id'];

if(isset($_POST['submit'])) { 
	
		$name = $_POST['username'];
		$pass = $_POST['password'];
	

		$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
		$query = "UPDATE user SET username='$name', password='$pass' WHERE id='$id' ";
		
		$result = mysqli_query ($connect, $query);
		
	if($result){
			header( 'Location:customers.php' );
		
	}else{
		 echo "Error updating record: " . mysqli_error($connect);
	}
		
		mysqli_close ($connect);
		
	
}
if(isset($_POST['cancel'])) { 
		header( 'Location:customers.php' );
}

?>