<link rel="stylesheet" type="text/css" href="css\project.css">
<link rel="stylesheet" type="text/css" href="css\footer.css">
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
		.text
		{
			font-size: 30px;
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
	
	<h1 class='center'>Add Shipment</h1>
	<form class='center' method='post'>
			
		<span>Enter Date:</span> <input class='center' type="text" name="date"/><br>
			  
		<span>Enter Delivery Date:</span> <input class='center' type="text" name="deliveryDate"/><br>
		
		<span>Enter Type:</span> <input class='center' type="text" name="type"/><br>
		
		<span>Enter Weight:</span> <input class='center' type="text" name="weight"/><br>
		
		<span>Enter Dimensions:</span> <input class='center' type="text" name="dimensions"/><br>
		
		<span>Enter Delivery Address:</span> <input class='center' type="text" name="deliveryAddress"/><br>
		
		<span>Enter Taking Address:</span> <input class='center' type="text" name="takingAddress"/><br>
		
		<span>Enter State:</span> <input class='center' type="text" name="state"/><br>
		
		<span>Enter Cost:</span> <input class='center' type="text" name="cost"/><br>
		
		<span>Enter Customer ID:</span> <input class='center' type="text" name="customer_id"/><br>
			  
		<input type="submit" name="submit" class="btn" value="Submit" />
		<input type="submit" name="cancel" class="btn" value="Cancel" />
	</form>
   <br> <br> <br> <br>
</body>

<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>
</html>



<?php


if(isset($_POST['submit'])) { 
	
		$date = $_POST['date'];
		$deliveryDate = $_POST['deliveryDate'];
		$type = $_POST['type'];
		$weight = $_POST['weight'];
		$deliveryAddress = $_POST['deliveryAddress'];
		$takingAddress = $_POST['takingAddress'];
		$state = $_POST['state'];
		$cost = $_POST['cost'];
		$customer_id = $_POST['customer_id'];
		$dimensions = $_POST['dimensions'];
	

		$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
		$query = "INSERT INTO shipment VALUES ('$date', null, '$deliveryDate', '$type', '$weight','$deliveryAddress','$takingAddress','$state','$cost','$customer_id','$dimensions')";
		
		$result = mysqli_query ($connect, $query);
		
	if($result){
			header( 'Location:adminShipments.php' );
		
	}else{
		 echo "Error adding record: " . mysqli_error($connect);
	}
		
		mysqli_close ($connect);
		
	
}
if(isset($_POST['cancel'])) { 
		header( 'Location:adminShipments.php' );
}

?>