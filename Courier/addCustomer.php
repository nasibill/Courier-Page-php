
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
			.center{
			text-align: center;
		}
	</style>
<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
                <a href="customers.php" class="nav-item nav-link">Customers</a>
                <a href="adminShipments.php" class="nav-item nav-link">Shipments</a>
                <a href="adminTransports.php" class="nav-item nav-link">Transports</a>
            </div>
			
				<div class="navbar-nav ml-auto">
					<a href="login.php" class="nav-item nav-link" onclick="logOut()">Log Out</a>
				</div>
			</div>
		</nav>
	
	<h1 class='center'>Registration User </h1>
	<form class='center' method='post'>
			
		<span>Enter Username:</span> <input class='center' type="text" name="username" value=""/><br>
			  
		<span>Enter Password:</span> <input  class='center'type="password" name="password" value=""/><br>
			  
		<input type="submit" name="submit" class="center" value="Submit" /><br>
		<input type="submit" name="cancel" class="center" value="Cancel" />
	</form>

</body>
<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>

</html>

<?php


if(isset($_POST['submit'])) { 
	
		$name = $_POST['username'];
		$pass = $_POST['password'];
	

		$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
		$query = "INSERT INTO user VALUES (null, '$name', '$pass')";
		
		$result = mysqli_query ($connect, $query);
		
	if($result){
			header( 'Location:customers.php' );
		
	}else{
		 echo "Error adding record: " . mysqli_error($connect);
	}
		
		mysqli_close ($connect);
		
	
}
if(isset($_POST['cancel'])) { 
		header( 'Location:customers.php' );
}

?>
