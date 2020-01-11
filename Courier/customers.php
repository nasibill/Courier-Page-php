<!DOCTYPE html>
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
		
		.center{
			text-align: center;
			
		}
			.text
		{
			font-size: 30px;
		}
	</style>
<body>


		
	
	<h1 class="center" >Customers Table</h1>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
                <a href="customers.php" class="nav-item nav-link">Customers</a>
                <a href="adminShipments.php" class="nav-item nav-link">Shipments</a>
                <a href="transports.php" class="nav-item nav-link">Transports</a>
            </div>
			
				<div class="navbar-nav ml-auto">
					<a href="login.php" class="nav-item nav-link" onclick="logOut()">Log Out</a>
				</div>
			</div>
		</nav>
<span class='text'><a href='addCustomer.php'>Add a new Customer</a></span>
</body>

<footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>
</html>

<?php

$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
$query = "SELECT * FROM user";

$result = mysqli_query ($connect, $query);

if(mysqli_num_rows($result) >0){
	echo "<table class='table table-dark'>";
		 echo "<tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";
		
		
	 while($row = mysqli_fetch_array($result)){
	 	$userId = $row['id'];
	 	echo"
			<tr>
				<form  method='post'>
					<td>".$row['id']."</td>
					<td>".$row['username']."</td>
					<td>".$row['password']."</td>
					<td><a href='update.php?user_id={$row['id']}'>Update</a></td>
					<td><input type='submit' name='delete' value='Delete'/></td>
					<td><input type='hidden' name='value' value='$userId'/></td>
				</form>
			</tr>";
	 }
	 echo "	</table>";
}
if(isset($_POST['delete'])) { 
	
			$value = $_POST['value'];
        	$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");
			$query = "DELETE FROM user WHERE id = '$value'";
			
			$result = mysqli_query ($connect, $query);
			
			if (mysqli_affected_rows($connect) == 1) {
				
				header( 'Location:customers.php' );
			} else {
				
				print "Delete failed!";
			}
			mysqli_close ($connect);
		       
        } 
?>