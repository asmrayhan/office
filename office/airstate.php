<?php

$name= "My Name is RAYHAN ";

?>



<!DOCTYPE html>
<html>
<head>
	<title>AIR STATE</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="container">
<body id="airstate" style="background-image: url(https://www.baf.mil.bd/wp-content/uploads/2016/10/F-7BGI-2.png); ">
	<header style="text-align: center">
		<h1><u>F-7 BGI R&I</u></h1>
		<h2>DAILY AIR STATE</h2>
	</header>
<form method="POST" action="">
	<div class="navbar">
		<div class="nav" style="float: right;">

			<button class="btn btn-success" name="add_ac" >Add AC</button>
			<input type="button" class="btn btn-success"  value="Print STATE" onclick="printPage()" /> 
		</div>
</div>		
	<div style="text-align: right;" ><span>Date:</span>
		<input type="date" name="date" ">
	</div>	

<?php
 echo '<div class="container">';
	echo '<table class="table table-bordered table-responsive">';
	echo '	<tr>
			<th>SL NO</th>
			<th>AC NO</th>
			<th>AC STATE</th>
			<th>AC FLOWN/NOT</th>
			<th>TOTAL AC HR</th>
			<th>DAILY AC HR</th>
			<th>AC INSP SHEDULE & DUE TIME</th>
			<th>AC HR LEFT</th>
			<th>TOTAL ENG HR</th>
			<th>DAILY ENG HR</th>
			<th>ENG INSP SHEDULE & DUE TIME</th>
			<th>ENG HRS LEFT</th>
			<th>TOTAL LDG</th>
			<th>REMARKS</th>
		</tr>';




	if (isset($_POST['add_ac'])) {
		$_POST['add_ac']=1;
		$add_ac=$_POST['add_ac'];
		
		do {
			echo '	
					<tr class="tr" name="tr1">
					<td> 
					<select>
					  <option>--</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					  <option>16</option>

					 </select> 
					
						
					</td>
					<td>
					<select>
					  <option value="none">---</option>
					  <option value="701">701</option>
					  <option value="702">702</option>
					  <option value="703">703</option>
					  <option value="704">704</option>
					  <option value="711">711</option>
					  <option value="712">712</option>
					  <option value="713">713</option>
					  <option value="714">714</option>
					  <option value="715">715</option>
					  <option value="716">716</option>
					  <option value="717">717</option>
					  <option value="718">718</option>
					  <option value="719">719</option>
					  <option value="720">720</option>
					  <option value="721">721</option>
					  <option value="722">722</option>
					</select>
					</td>

					<td>
						<select>
						  <option value="none">---</option>
						  <option value="unsvc">U/S</option>
						  <option value="svc">SVC</option>
					  	</select>
					</td>
					<td>
						<div>
							<select>
							  <option value="none">---</option>
							  <option value="grun">Ground Run</option>
							  <option value="flown_1">FLOWN/01</option>
							  <option value="flown_2">FLOWN/02</option>
							  <option value="flown_3">FLOWN/03</option>
							  <option value="flown_4">FLOWN/04</option>
							  <option value="flown_5">FLOWN/05</option>
							  <option value="flown_6">FLOWN/06</option>
							  <option value="flown_7">FLOWN/07</option>
					  		</select>
					  	</div>
					  	<div>
					  		<input type="text" name="flown_time" style="width: 101px;height: 20px" >
					  	</div>
					</td>
					<td><input type="text" name="total_ac_hrs" style="width: 50px" ></td>
					<td><? php echo $_POST["flown_time"];?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

				</tr>
			';

			$add_ac++;
		}while ($add_ac <= 10);
		
		
	}
	
	echo "</table>";
	
	
echo "</div>";	
?>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function printPage() {
    window.print();
}
</script>
</body>
</html>