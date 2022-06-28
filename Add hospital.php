<!DOCTYPE html>
<html>
<head>
	<title><!DOCTYPE html>
<html>
<head>
	<title>Add Hospital</title>
</head>
<style>
	body {
	  font-family: "Lato", sans-serif;
	  background-size: cover;
	  position: fixed;
	  background: url('childback.jpg');
	}
	.div{
        padding:20;
        font-size:20;
    }
	.text{
		background-color:#c2d6d6;
		border:none;
		padding:9px 10px;
	}	
	.container {
	    position:absolute;
	    margin: 22px 50px 50px 600px;
	    padding: 70px;
	    background-color: white;
	    font-family:Century Gothic;	
	}
	input[type='submit']{
		width:100px;
		height:35px;
		border-radius:50px 50px 50px 50px;
	}
</style>

<body>
<form method="POST" class="container" action="<?php $_SERVER['PHP_SELF'] ?>">

<div class="div">
<a href="adminindex.php"><img src="backarrow.png" width="30" height="30"></a>

<h1>Add Hospital</h1>	

<label ><b>Hospital Name</b></label></br>
<select name="vaccine" style="width: 200px; height: 30px">
	<option value="none" selected disabled hidden> Select Hospital</option>
	<option value="Dhaka Shishu (Children) Hospital">Dhaka Shishu (Children) Hospital</option>
	<option value="BIRDEM General Hospital 2 (Child and Mother)">BIRDEM General Hospital 2 (Child and Mother)</option>
	<option value="OPV Birth dose">OPV Birth dose </option>
	<option value="IPV (inactivated Polio Vaccine)">IPV (inactivated Polio Vaccine)</option>
	<option value="Pentavelant">Pentavelant</option>
	<option value="Rota Virus Vaccine">Rota Virus Vaccine</option>
	<option value="DPT 1st  booster">DPT 1st  booster</option>
	<option value="DPT2 2nd Booster">DPT 2nd Booster </option>
	<option value="Vitamin A">Vitamin A</option>
	<option value="other">Other</option>
</select> 

<br><br>

<center><input type="Submit" name="addvaccine" value="Add Vaccine"/></center>

</div>

<?php

	include 'database_connection.php';
	
	if(isset($_POST['addhospital']))
	{
		$name = $_POST['hospital'];

		$time = '';

		if($name == 'Dhaka Shishu (Children) Hospital')
			$time = '+6 month';
		elseif ($name == 'BIRDEM General Hospital 2 (Child and Mother)') 
			$time = '+1 day';
		elseif ($name == 'OPV Birth dose')
			$time = '+10 day';
		elseif ($name == 'IPV (inactivated Polio Vaccine)')
			$time = '+3 month';
		elseif ($name == 'Pentavelant')
			$time = '+2 month';
		elseif ($name == 'Rota Virus Vaccine')
			$time = '+2 month';
		elseif ($name == 'DPT 1st  booster')
			$time = '+24 month';
		elseif ($name == 'DPT2 2nd Booster')
			$time = '+60 month';
		else
			$time = '+9 month';

		$query="INSERT INTO vaccine VALUES('$name','$time')";
		
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
		
		echo "<script>alert('Add Vaccine Details..!!');window.location='addvaccine.php'</script>";
	}
?>


</body>
</html></title>
</head>
