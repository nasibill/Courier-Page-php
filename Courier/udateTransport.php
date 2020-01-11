<body>
	<h1 class='header'>Update Transport</h1>
	<form method='post'>
			
		<span>Enter Date:</span> <input type="text" name="date"/><br>
			  
		<span>Enter Delivery Date:</span> <input type="text" name="deliveryDate"/><br>
		
		<span>Enter Type:</span> <input type="text" name="type"/><br>
		
		<span>Enter Weight:</span> <input type="text" name="weight"/><br>
		
		<span>Enter Dimensions:</span> <input type="text" name="dimensions"/><br>
		
		<span>Enter Delivery Address:</span> <input type="text" name="deliveryAddress"/><br>
		
		<span>Enter Taking Address:</span> <input type="text" name="takingAddress"/><br>
		
		<span>Enter State:</span> <input type="text" name="state"/><br>
		
		<span>Enter Cost:</span> <input type="text" name="cost"/><br>
		
		<span>Enter Customer ID:</span> <input type="text" name="customer_id"/><br>
			  
		<input type="submit" name="submit" class="btn" value="Submit" />
		<input type="submit" name="cancel" class="btn" value="Cancel" />
	</form>

</body>
</html>

<?php

$id = $_GET['transport_id'];
if(isset($_POST['submit'])) { 
	
		$date = $_POST['date'];
		$deliveryDate = $_POST['deliveryDate'];
		$type = $_POST['type'];
		$weight = $_POST['weight'];
		$dimensions = $_POST['dimensions'];
		$deliveryAddress = $_POST['deliveryAddress'];
		$takingAddress = $_POST['takingAddress'];
		$state = $_POST['state'];
		$cost = $_POST['cost'];
		$customer_id = $_POST['customer_id'];
	

		$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
		$query = "UPDATE transports SET date= '$date', deliveryDate= '$deliveryDate', type='$type', weight='$weight', dimensions='$dimensions',deliveryAddress='$deliveryAddress',
		takingAddress='$takingAddress',state='$state',cost='$cost',customer_id='$customer_id'  WHERE id='$id' ";
		
		$result = mysqli_query ($connect, $query);
		
	if($result){
			header( 'Location:adminTransports.php' );
		
	}else{
		 echo "Error adding record: " . mysqli_error($connect);
	}
		
		mysqli_close ($connect);
		
	
}
if(isset($_POST['cancel'])) { 
		header( 'Location:adminTransports.php' );
}

?>