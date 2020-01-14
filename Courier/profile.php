<!DOCTYPE html>
<html>
	
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
	</style>
    
<body>
	<h1 class='center'>My Shipments</h1>
	
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
                <a href="profile.php" class="nav-item nav-link">My Shipments</a>
                <a href="transports.php" class="nav-item nav-link">My Transports</a>
            </div>
			
			
				<div class="navbar-nav ml-auto">
					<a href="login.php" class="nav-item nav-link" onclick="logOut()">Log Out</a>
				</div>
			
		</nav>
</body>
<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>
</html>

<?php

session_start();


$id = $_SESSION['id'];

$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
$query = "SELECT * FROM shipment WHERE  customer_id = '$id' ";

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
	 	
	 	echo"
			<tr>
			
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
				<td><a href='details.php?shipment_id={$row['id']}'>View Detail</a></td>
			</tr>";
	 }
	 echo "	</table>";
}
?>
	