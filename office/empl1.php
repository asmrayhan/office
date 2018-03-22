<?php
require 'config.php';

?>


<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script>
    function printPage() {
        window.print();
    }
    </script>
    <style type="text/css">
        body{
            background-color: rgba(230, 204, 255, 0.8);
        }
    </style>
</head>

<body>
<div class="Container">
<form method="POST" action="">
<input type="submit" name="submit" value="Total Employees" class="btn btn-primary">
<button type="submit" name="submit1" class="btn btn-info"> Add Employee</button>
<button class="btn btn-success"><a href="home1.php" style="text-decoration: none;">Back</a></button>
<input type="button" class="btn btn-success"  value="Print Nominal Roll" onclick="printPage()" />
</form>
<div style="text-align: center;">
        <h1><b><u> Nominal Roll</b></u> </h1>
    </div>
</div>
   
 <?php
        
if (isset($_POST["submit"])) {
   $res=mysqli_query($conn,"SELECT * FROM `employee`");
   echo "<div class='Container'>";
    echo "<div class='class=col-md-12'>";
    echo "<table class='table table-bordered table-responsive table-striped table-hover' style=''>";
       echo "<tr class='danger'>
            <th>Sl No</th>
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
                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; echo $row["bd"]; echo "</td>";
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

            echo "</tr>";
    
}
echo "</table>";
echo "</div>";
echo "</div>";

}


if (isset($_POST["submit1"])) {
    header("Location: add_emplyee.php");
}

?>

</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>