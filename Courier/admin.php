<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css\project9.css">
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
	</style>
<body>
	<h1 class='center'>Administrator Page</h1>
	

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


?>