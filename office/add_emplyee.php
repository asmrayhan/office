
<?php


$conn=mysqli_connect('localhost','root','','demo');
if ($conn) {
    echo "Connection Successfull.";
   
}


if (isset($_POST["add"])){
	mysqli_query($conn,"INSERT INTO employee(bd, rank, name, trade, mobile, bg, dob, doj, dor, qtrno, marritalsts, wifename,nosps) VALUES ('$_POST[bd]','$_POST[rank]','$_POST[name]','$_POST[trade]','$_POST[mobile]','$_POST[bg]','$_POST[dob]','$_POST[doj]','$_POST[dor]','$_POST[qtrno]','$_POST[marritalsts]','$_POST[wifename]','$_POST[nosps]')");

			
	} 
	

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<a href="empl1.php" class="btn btn-danger"> Back</a>
	
	<form method="POST" action="">
<div class="container">
	<div class="row">
	<div class="col-md-5">	
		<div class="form-group col-md-12">
			<label for="usr">BD NO:</label>
			<input type="text" class="form-control" id="" name="bd">
			<label for="usr">Rank:</label>
				<select class="form-control" id="" name="rank">
				    <option>MWO</option>
				    <option>SWO</option>
				    <option>WO</option>
				    <option>SGT</option>
				    <option>CPL</option>
				    <option>LAC</option>
				    <option>AC</option>
			  	</select>
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="" name="name">
			<label for="usr">Trade:</label>
			<select class="form-control" id="" name="trade">
				    <option>Afr</option>
				    <option>Eng</option>
				    <option>Elect</option>
				    <option>Inst</option>
				    <option>Radio</option>
				    <option>Radar</option>
				    <option>Armt</option>
				    <option>LSEW</option>
				    <option>Photo</option>
			</select>

			<label for="usr">Mobile No:</label>
			<input type="text" class="form-control" id="" name="mobile">
			<label for="usr">Blood Group:</label>
			<select class="form-control" id="" name="bg">
				    <option>A+(ve)</option>
				    <option>A-(ve)</option>
				    <option>B+(ve)</option>
				    <option>B-(ve)</option>
				    <option>AB+(ve)</option>
				    <option>AB-(ve)</option>
				    <option>O+(ve)</option>
				    <option>O-(ve)</option>
			</select>
			<label for="usr">Date of birth:</label>
			<input type="Date" class="form-control" id="" name="dob">
			</div>
	</div>
		<div class="col-md-5">
			<div class="form-group col-md-12">
			<label for="usr">Date of Joint:</label>
			<input type="Date" class="form-control" id="" name="doj">
			<label for="Date">Date of Report to Section:</label>
			<input type="Date" class="form-control" id="" name="dor">
			<label for="usr">Qtr No/ Blook No:</label>
			<input type="text" class="form-control" id="" name="qtrno">
			<label for="usr">Marrital Status:</label>
			<select class="form-control" id="" name="marritalsts">
				    <option>Married</option>
				    <option>Unmarried</option>
				    
			</select>
			<label for="usr">Wife Name:</label>
			<input type="text" class="form-control" id="" name="wifename">
			<label for="usr">No of Spouse:</label>
			<select class="form-control" id="" name="nosps">
		        <option>0</option>
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
		        <option>4</option>
		        <option>5</option>
		     </select>
		 </div>
			
		</div>
		<button class="btn btn-danger" name="add" data-toggle="modal" data-target="#myModal" data-backdrop="true">Save </button>
		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Modal with Dark Overlay</h4>
        </div>
        <div class="modal-body">
          <p>This modal has a dark overlay.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

		<button class="btn btn-primary" name="Update">Update </button>

</form>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>