<?php
include '../config/config.php';
//Booking Code

if(isset($_REQUEST['booking'])){
	$name= $_REQUEST['name'];
	$email= $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	$pass = $_REQUEST['pass'];
	$cpass = $_REQUEST['cpass'];



	if(empty($name) || empty($email) || empty($contact)){
		$_SESSION['error']='Please Fill the blanks';
		header('location:'$siteurl.'form.php');
	}
	else{
		if ($pass==$cpass) {
			$password=md5($pass);
			$sql = mysqli_query($conn,"SELECT * FROM user_Registration WHERE email= '$email' ");

			if(mysql_num_rows($sql)>0){
				$_SESSION['error']='Registration Already Exists!';
				header('location:'$siteurl.'index.php');
			}
			else{

			$sql = "INSERT INTO booking(name, email, contact) VALUES('$name', '$email', '$contact')";
			$_SESSION['error']='User Registration is Successfull!';
			header('location:'$siteurl.'index.php');
			}
		}
		else{
			$_SESSION['error']='Your Password did not Match';
			header('location:'$siteurl.'form.php');
		}

	}
}