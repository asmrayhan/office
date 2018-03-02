<?php

$name= "My Name is RAYHAN ";

?>



<!DOCTYPE html>
<html>
<head>
	<title>AIR STATE</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="container">
<body id="airstate" style="background-color: #9494b8 ">
	<header style="text-align: center; background-color: #66ccff">
		<h1><u>F-7 BGI R&I</u></h1>
		<h2>DAILY AIR STATE</h2>
	</header>
<form method="POST" action="">	
	<button class="add_ac">Add AC</button>
	<input type="date" name="date">
<div class="container">
	<table class="table table-bordered">
		<tr>	
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
		</tr>
		<tr class="tr">
			<td>
			<select>
			  <option value="non">---</option>
			  <option value="701">701</option>
			  <option value="702">702</option>
			  <option value="703">703</option>
			  <option value="711">711</option>
			  <option value="712">711</option>
			  <option value="713">711</option>
			  <option value="714">711</option>
			  <option value="715">711</option>
			  <option value="716">711</option>
			  <option value="717">711</option>
			  <option value="718">711</option>
			  <option value="719">711</option>
			  <option value="720">711</option>
			  <option value="721">711</option>
			  <option value="722">711</option>
			</select>
			</td>

			<td>
				<select>
				  <option value="non">---</option>
				  <option value="unsvc">U/S</option>
				  <option value="svc">SVC</option>
			  	</select>
			</td>
			<td>
				<div>
					<select>
					  <option value="non">---</option>
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
			  		<input type="text" name="flown_time" style="width: 95px;height: 20px">
			  	</div>
			</td>
			<td><input type="text" name="total_ac_hrs" style="width: 50px"></td>
			<td><input type="text" name="daily_ac_hrs" style="width: 50px"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>

	</table>
	<?php

echo "$name";
echo "<br/>";
echo "$name";
?>
</div>	

</form>
</div>
<script>

$(document).ready(function(){
    $(".add_ac").click(function(){
        $("container").append($(".container"));
    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>