<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"demo");

// Check connection
if (mysqli_connect_errno()) {
    echo "Fail to connect Date base :".$mysqli_connect_errno();
} 
else{
	echo "Connected successfully</br>";

}

?>