
<?php
include 'config.php';
$userErr = $passErr = "";
$user = $pass ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $userErr = "Name is required";
  } else {
    $user = $_POST["user"];
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = $_POST["pass"];
  }



}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="user" placeholder="Insert Your user name">
<span class="error">* <?php echo $userErr;?></span>
<br/>
<input type="Password" name="pass" placeholder="Insert Your Password">
<span class="error">* <?php echo $passErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"><br/>
</form>
<?php
echo "$user";
echo "<br/>";
echo "$pass";
?>

</body>
</html>