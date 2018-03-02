<?php
require 'config.php';



$sql="SELECT * FROM employee ";
$result=mysqli_query($conn,$sql)
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "$result";
    }
} else {
    echo "0 results";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employ</title>
</head>
<body>
	<form action="" method="POST">
	<span>BD/NO:</span><input type="number" name="bd" value="" placeholder="Enter BD NO" maxlength="6"><br/>
	<span>Rank:</span><input type="text" name="rank" value="" placeholder="Enter Name" maxlength="50"><br/>
	<span>Name:</span><input type="text" name="name" value="" placeholder="Name" maxlength="50" style="width: 100px, hight:auto" ><br/>
	<span>Trade:</span><input type="text" name="trade" value="" placeholder="Trade" maxlength="10"><br/>
	Mobile No:</span><input type="number" name="mobile" value="" placeholder="Enter BD NO" maxlength="6"><br/>
	<span>Blood Group:</span><input type="text" name="bg" value="" placeholder="Enter Blood Group" maxlength="50"><br/>
	<span>Bate Of Birth:</span><input type="date" name="dob" value="" placeholder="Enter Date Of Birth" maxlength="50"><br/>
	<span>Bate Of Joine in Service:</span><input type="date" name="doj" value="" placeholder="Enter Date Of Birth" maxlength="50"><br/>
	<span>Bate Of Repoting in Section:</span><input type="date" name="dor" value="" placeholder="Enter Date Of Birth" maxlength="50"><br/>
	<span>Quater/Blook No:</span><input type="text" name="qtrno" value="" placeholder="Enter Qtr No/ Blook No" maxlength="50"><br/>
	<span>Marrital Stutas:</span><span>Male</span><input type="radio" name="marritalsts" value="">
	<span>Female</span><input type="radio" name="marritalsts" value=""><br/>
	<span>Wife Name:</span><input type="text" name="wifename" value="" placeholder="Name" maxlength="50" style="width: 100px, hight:auto" ><br/>
	<span>No of Spaous</span><input type="number" name="nosps" value="" placeholder="Enter BD NO" maxlength="6"><br/>
	<input type="submit" name="submit" value="Submit">

	</form>

</body>
</html>