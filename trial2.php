<?php
session_start();
?>
<! DOCTYPE HTML>
<html>

<head>
<style type="text/css">
	.modal {
    display:block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: black;
    margin: auto;
    padding: 20px;
    height: 400px;
    width: 400px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>

<body>



<?php

	$email1=$_POST["email1"];
	// Set session variables
$_SESSION["user"] = "$email1";
$pw=$_POST["pw"];
//25
if(isset($_POST["login"]))
	{
	
		if(empty($_POST["email1"])||empty($_POST["pw"]))
		{

			echo "<script>
			alert('Both the form fields are mandatory ');
			window.location.href='signin.php';
			</script>";

		}

		else
		{
$username="root";
	$password="";
	$database="alumni";
	$server="localhost";

$conn1 = mysqli_connect($server, $username, $password, $database);

$check = "SELECT PASSWORD from VERIFICATION where EMAIL='".$email1."'";

	if(!$conn1)
	{
		//die("Connection error :" . $conn1->connect_error);
		echo "fatal error";
	}

     $result=mysqli_query($conn1,$check);
	 $row = mysqli_fetch_array($result);
	 $ans= $row['PASSWORD'];
	 echo $ans;