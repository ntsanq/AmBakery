<?php 
	//get values
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	//connect to server database
	$connect = mysqli_connect('localhost', 'root', '', 'login');
	mysqli_set_charset($connect, 'utf8');


	$username = mysqli_real_escape_string($connect, $username);
	$password = mysqli_real_escape_string($connect,$password);


	$sql = "select * from users WHERE username = '$username' and password = '$password' ";

	//Query the database for user
	$result = mysqli_query($connect, $sql)
		or die("Fail to query database ".mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Login success! Welcome ".$row['username'];
		header("Location: dashboard/index.php");
	}else {
		echo "Failed to login!";
	}