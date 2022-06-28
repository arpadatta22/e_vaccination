<?php
	
  session_start();
  
  if(!isset($_SESSION["username"])){
	  header("location:index.php");
  }
?>
	
    


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
  body {
    font-family: "Lato", sans-serif;
    background-size: cover;
    position: fixed;
    background: url('indexba.jpg');
  }
  .topnav {
    overflow: hidden;
    background-color: #A9A9A9;
  }

  .topnav a,label {
    	float: right;
    	color: black;
    	text-align: right;
    	padding: 14px 16px;
    	text-decoration: none;
    	font-size: 17px;

  }
  .topnav a:hover {
    background-color: #A9A9A9;
    color: #A9CCE3;
  }

  .topnav activea. {
    background-color:#A9A9A9;
    color: white;
  }
  .bg{
  	opacity: 0.7;
  	background-color: black;
  	width: 1370px;
  	height: 650px;
  	margin: 30px 40px;
  	padding: 30px;
  }
  .btn{
      color:white;
      background:#A9A9A9;
      padding:35px;
      text-align:center;
      vertical-align: middle;
      font-size:23px;
      border-radius:20px;
      width:10%;
      height:120px;
      margin:10px;
      display:inline-block;
      box-shadow: 6px 6px #A9CCE3;
  }
</style>
<body>

<div class="topnav">
  <label ><?php echo $_SESSION['username']; ?></label>
  <a href="logout.php">Logout</a>
</div>

<div class="bg">
<center>
<a href= "viewchild.php"><div class="btn"><img src="viewchild.png" /><br>View Child Details</div></a>
<a href= "addvaccine.php"><div class="btn"><img src="addvaccine.png" /><br>Add vaccine</div></a><br>
<a href= "addhospital.php"><div class="btn"><img src="addvaccine.png" /><br>Add hospital</div></a><br>
<a href= "allocate_vaccine.php"><div class="btn"><img src="report.png" /><br>Allocat Vaccine</div></a>
<a href= "report.php"><div class="btn"><img src="report.png" /><br>View Report</div></a>
</center>
</div>

</body>
</html>