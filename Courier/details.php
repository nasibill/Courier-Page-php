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
	<h1 class='center'>Shipment Details</h1>
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
$id = $_GET['shipment_id'];

$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
$query = "SELECT * FROM details WHERE  shipment_id = '$id' ";

$result = mysqli_query ($connect, $query);

if(mysqli_num_rows($result) >0){
	
		echo "<table class='table table-dark'>";
		echo "<tr>
    <th>Date</th>
    <th>Description</th>
	</tr>";
	
	 while($row = mysqli_fetch_array($result)){
		echo"
			<tr>
				<td>".$row['date']."</td>
				<td>".$row['description']."</td>
			</tr>";
	 }
	 echo "	</table>";
}else{
	echo "<h1 class='header'>No Data Registered yet for display. Please check again later</h1>";
}

?>