<?php
	session_start();
	
  
   
  if(!isset($_SESSION["username"])){
	  header("location:index.php");
  }
?>

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
<select name="hospital" style="width: 200px; height: 30px">
	<option value="none" selected disabled hidden> Select Hospital</option>
	<option value="Dhaka Shishu (Children) Hospital">Dhaka Shishu (Children) Hospital</option>
	<option value="BIRDEM General Hospital 2 (Child and Mother)">BIRDEM General Hospital 2 (Child and Mother)</option>
	<option value="BACC Womens Children Hospital">BACC Womens Children Hospital </option>
	
	<option value="other">Other</option>
</select> 

<br><br>

<center><input type="Submit" name="addhospital" value="Add Hospital"/></center>

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
		elseif ($name == 'BACC Womens Children Hospital')
			
			$time = '+10 day';
		
		
		else
			$time = '+9 month';

		$query="INSERT INTO hospital VALUES('$name','$time')";
		
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
		
		echo "<script>alert('Add Hospital Details..!!');window.location='addhospital.php'</script>";
	}
?>


</body>
</html>
		

