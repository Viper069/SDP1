
<?php 
$conn = mysqli_connect("localhost","root","","sdp1");
if (isset($_POST['Submit'])) {
	$SL_No = $_POST['SL_No'];
	$Notice = $_POST['Notice'];
	$sql = " INSERT INTO `notice`(`SL_No`, `Notice`) VALUES ('$SL_No','$Notice') ";
	mysqli_query($conn,$sql);
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


		 <div align="center">
      <form action="POST" class="form-control">
		SL_No:<input type="number" name="SL"class= "col-sm-4 form-control" ><br>
		Notice: <input type="text" name="Notice" class="col-sm-6 form-control" ><br>
		<input type="Submit" name="Submit" value="Submit" class="btn btn-success btn-bg">
</form></div>
<br><br><br><br><br><br><br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>