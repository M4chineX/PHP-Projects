
<?php 
	//db cat
	$servername = "localhost";
    $usrname = "root";
    $pass = "";
    $dbname = "mobilebazer_demo1";
    
	//user input
	
	$username =	$_REQUEST['username'];
	$email =	$_REQUEST['email'];
	$password =	$_REQUEST['password'];



	$con = mysqli_connect($servername,$usrname,$pass,$dbname);

	if ($con) {
		echo "we are connected";
	}
	else{
		echo "we are not connected";
	}


	$query = "INSERT INTO user_info (username, email, password ) VALUES ('$username', '$email', '$password')";

	$result = mysqli_query($con, $query);

	

	if ($result) {
		 
		echo "Registration completed successfully";
		header("Location: index.html"); // Redirect to user dashboard page
	}else{
		echo "Insert Not success";
	}

	

 ?>