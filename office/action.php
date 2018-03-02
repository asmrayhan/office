<?php
require 'config.php';

if(isset($_POST["submit"])){  
  

    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
 
    
  $sql="SELECT * FROM loginform WHERE user='$user' AND pass='$pass'";
    $result= mysqli_query($conn, $sql);  

if(mysqli_fetch_assoc($result)){
    
           echo "Welcome $user";
    header("Location: index.php"); 
    
}  else {  
    
    echo "Invalid username or password!";  
     
    }  
  
} else {  
    echo "All fields are required!"; 
    header("Location: login.php");
}  
  
?>  