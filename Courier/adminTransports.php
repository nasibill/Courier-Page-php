<link rel="stylesheet" type="text/css" href="css\footer.css">
    <link rel="stylesheet" type="text/css" href="css\project9.css">
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
	<h1 class='center'>Transports Table</h1>
	<div class='cont'>
		
		<span class='text' ><a class='link' href='addTransport.php'>Add a new Transport</a></span>
	</div>
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

</body>
<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>

</html>

<?php

$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
$query = "SELECT * FROM transports";

$result = mysqli_query ($connect, $query);

if(mysqli_num_rows($result) >0){
		echo "<table class='table table-dark'>";
		 echo "<tr>
                 <th>ID</th>
			    <th>Customer ID</th>
			    <th>Date</th>
			    <th>Type</th>
			    <th>Weight</th>
			    <th>Dimensions</th>
			    <th>Delivery Date</th>
			    <th>Taking Address</th>
			    <th>Delivery Address</th>
			    <th>State</th>
			    <th>Cost</th>
			</tr>";
		
	 while($row = mysqli_fetch_array($result)){
	 	$shipmentId = $row['id'];
	 	echo"
			<tr>
				<form  method='post'>
					<td>".$row['id']."</td>
					<td>".$row['customer_id']."</td>
					<td>".$row['date']."</td>
					<td>".$row['type']."</td>
					<td>".$row['weight']."</td>
					<td>".$row['dimensions']."</td>
					<td>".$row['deliveryDate']."</td>
					<td>".$row['takingAddress']."</td>
					<td>".$row['deliveryAddress']."</td>
					<td>".$row['state']."</td>
					<td>".$row['cost']."</td>
					<td><a href='updateTransport.php?transport_id={$row['id']}'>Update</a></td>
					<td><input type='submit' name='delete' value='Delete'/></td>
					<td><input type='hidden' name='value' value='$shipmentId'/></td>
				</form>
			</tr>";
	 }
	 echo "	</table>";
}

if(isset($_POST['delete'])) { 
	
			$value = $_POST['value'];
        	$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
			$query = "DELETE FROM transports WHERE id = '$value'";
			
			$result = mysqli_query ($connect, $query);
			
			if (mysqli_affected_rows($connect) == 1) {
				
				header( 'Location:adminTransports.php' );
			} else {
				
				print "Delete failed!";
			}
			mysqli_close ($connect);
		       
        } 
?>