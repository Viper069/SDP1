
<?php 
$conn = mysqli_connect("localhost","root","","sdp1");

if (isset($_POST['Submit'])) {
	$SL_No=$_POST['SL_No'];
	$Notice=$_POST['Notice'];


	$sql = " INSERT INTO `notice`(`SL_No`, `Notice`) VALUES ('$SL_No','$Notice') ";
	$re= mysqli_query($conn,$sql);
	header('location: Notice_index.php');
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<title>School Management Website</title>
	<link rel="stylesheet" type="text/css" href="../css/nis.css">


</style>	
</head>
<body style="
		background-repeat: no-repeat;
		background-size: cover;
		font-family: sans-serif;
		margin: 0;
		padding: 0;
		background-image:url('../Image/one.jpg');
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		color: white;
}">
	<div class="wrapper">
		<nav>
			<img src="loo.jpg" class ="img" alt="logo">	
			 <ul>
			 <li><a href="../Main Page/main.php"class="btn btn-success">HOME</a></li>
			 <li><a href="../St_Data/student.php" class="btn btn-success">Student Panel</a></li>
			 <li><a href="../Teacher_Db/teacher.php"class="btn btn-success">Teacher Panel</a></li>
			 <li><a href="../Notice/Notice_index.php"class="btn btn-success">Notice_Board</a></li>
			 <li><a href="logout.php" class="btn btn-light" >Sign out</a></li>

			 </ul>		
		</nav>
		<div class="section"></div>
		<br><br>
<form method="POST" class="form-control">
		SL_No:<input type="number" name="SL_No" class="col-sm-2" ><br>
		Notice: <input type="text" name="Notice" class="col-sm-8" ><br>
		<input type="Submit" name="Submit" value="Submit" class="btn btn-success">
 
</form>      
<br>
<br>
<br>
<br>
<br><br><br>
<br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>
















<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<title>School Management Website</title>
	<link rel="stylesheet" type="text/css" href="../css/nis.css">
</style>	

</head>
<body>
	<div class="wrapper">
		<nav>
			<img src="loo.jpg" class ="img" alt="logo">	
			 <ul>
			 <li><a href="../Main Page/main.php"class="btn btn-success">HOME</a></li>
			 <li><a href="../St_Data/student.php" class="btn btn-success">Student Panel</a></li>
			 <li><a href="../Teacher_Db/teacher.php"class="btn btn-success">Teacher Panel</a></li>
			 <li><a href="../Notice/Notice_index.php"class="btn btn-success">Notice_Board</a></li>
			 <li><a href="logout.php" class="btn btn-light" >Sign out</a></li>

			 </ul>		
		</nav>
		<div class="section"></div>
		<br><br>


		<h1 style="color: #ddd;">Welcome <?php echo $login_session; ?> As Admin</h1> 
      <br><br><br><br><br><br><br><br>
      <br><br><br>

<br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>