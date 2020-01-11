<!DOCTYPE html>
<html>
		
    <link rel="stylesheet" type="text/css" href="css\footer.css">
    <link rel="stylesheet" type="text/css" href="css\project.css">
		
    <title>
        Register page
    </title>
 </head>

<body>

   <form method="post" action="">

      <span class="login100-form-title">
            Member Register
        </span>
      <br>
 <input type="text" name="username" placeholder="Type your Username"  class="center" />
<input type="password" name="password" placeholder="Type your Password" class="center" /> <br>
<input type="submit" class='loginbutton' name="someAction" value="Submit" />

    </form>
  </body>
 <footer>
    <br>
    <h5> ABC Courier COPYRIGHT © 2019. ALL RIGHTS RESERVED - DESIGNED BY Thanasis Bilero</h5>
</footer>
</html>

<?php
	$name = $_POST['username'];
	$pass = $_POST['password'];
    
     if($_SERVER['REQUEST_METHOD'] == "POST")	{
     	
	  
		$connect = mysqli_connect ("localhost", "ddpms19460", "dpmsp@ss", "ddpms19460") or die("test");

		$query = "INSERT INTO user VALUES (null, '$name', '$pass')";
		print "The Query is $query";
		mysqli_query($connect, $query);
		if(mysqli_connect_error()){
		die('Could not connect to the database'.mysqli_connect_error());
		
	 }else if (mysqli_affected_rows($connect) == 1) {
		print "Insert into Products was successful";
		header( 'Location:login.php' );
		} ;
		mysqli_close ($connect);
		       
				}
?>