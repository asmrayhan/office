<?php
require 'config.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
</head>
<body>







<div class="container">
	<form method="POST" action="">
		<input type="submit" name="submit">
		<button type="submit" name="submit1"> Add Employee</button>
	</form>
</div>
<?php

			echo "<div class='container'>";
			echo "<div class='table-responsive'>";
			echo "<table class='table table-strip table-bordered'>";
			echo "<tbody>";
        
if (isset($_POST["submit"])) {


   $res=mysqli_query($conn,"SELECT * FROM employee");
		  	
       		echo "<tr class= 'success'>
            <th>BD NO</th>
            <th>Rank</th>
            <th>Name</th>
            <th>trade</th>
            <th>Mobile No</th>
            <th>Blood Group</th>
            <th>Date Of Bitrh</th>
            <th>Date Of Joint</th>
            <th>Date Of Report</th>
            <th>Qtr No</th>
            <th>Marital Status</th>
             <th>Wife name</th>
            <th>No Of Spous</th>
            </tr>
            <tr>";

        while ($row=mysqli_fetch_array($res)) {
            echo "<tr>";
                    echo "<td >"; echo $row["bd"]; echo "</td>";
                    echo "<td>"; echo $row["rank"]; echo "</td>";
                    echo "<td>"; echo $row["name"]; echo "</td>";
                    echo "<td>"; echo $row["trade"]; echo "</td>";
                    echo "<td>"; echo $row["mobile"]; echo "</td>";
                    echo "<td>"; echo $row["bg"]; echo "</td>";
                    echo "<td>"; echo $row["dob"]; echo "</td>";
                    echo "<td>"; echo $row["doj"]; echo "</td>";
                    echo "<td>"; echo $row["dor"]; echo "</td>";
                    echo "<td>"; echo $row["qtrno"]; echo "</td>";
                    echo "<td>"; echo $row["marritalsts"]; echo "</td>";
                    echo "<td>"; echo $row["wifename"]; echo "</td>";
                    echo "<td>"; echo $row["nosps"]; echo "</td>";

            
    
		}

}


if (isset($_POST["submit1"])) {
    header("Location: add_emplyee.php");
}

echo "</tr>";
            echo "</tbody>";
			echo "</table>";
 

			echo "</div>";

			echo "</div>";
?>
	
</div>
</div>



	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   	<script src="js/bootstrap.js"> </script>
</body>
</html>