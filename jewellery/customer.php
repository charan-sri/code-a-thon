<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jewellery";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

$name=$_REQUEST['name'];
$id=$_REQUEST['id'];
$phone=$_REQUEST['phone'];
$sql= "INSERT INTO customer VALUES ('$name','$id','$phone')";

$type=$_REQUEST['type'];
$weight=$_REQUEST['weight'];
$stone=$_REQUEST['stone'];
$price=$_REQUEST['price'];
$purity=$_REQUEST['purity'];
$amount=$_REQUEST['amount'];
$timestamp=$_REQUEST['timestamp'];
$tid=$_REQUEST['tid'];
$sql1="INSERT INTO info VALUES('type','weight','stone','price','purity','timestamp','tid')";
