<?php
 $ID=$_GET['ID']; 
$conn = mysqli_connect("localhost","root","","sdp1");
$sql = " SELECT * FROM teacher WHERE ID='$ID' ";
$result= mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
if (isset($_POST['Update'])) {


	$Name=$_POST['Name'];
	$Phone_Number=$_POST['Phone_Number'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	
$conn = mysqli_connect("localhost","root","","sdp1");
$sql = "UPDATE teacher SET Name = '$Name', Phone_Number = '$Phone_Number', Address ='$Address', Email = '$Email' WHERE ID = $ID ";
 mysqli_query($conn,$sql);
 header('location: teacher.php');
}

 ?>


<!DOCTYPE html>    
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	
</body>
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
	<h1 align="center" style="color: white;" ><strong>Edit Teacher information</strong></h1><br><br>
<form method="POST" align="center" class="form-control" style="background-color: initial; color: white;">

 <label>Name:</label>  		<input type="Text" name="Name" value=" <?php echo $row['Name']; ?> " class="col-sm-4"></br>
  <label>Phone_Number:</label>	<input type="text" name="Phone_Number" value=" <?php echo $row['Phone_Number']; ?> " class="col-sm-4"></br>
 <label>Address:</label>	   		<input type="Text" name="Address" value=" <?php echo $row['Address']; ?> "class="col-sm-4" ></br>
  <label>Email:</label>	   		<input type="Email" name="Email" value=" <?php echo $row['Email']; ?> " class="col-sm-4"></br><br>
  <input type="Submit" name="Update" value="Submit"class="btn btn-success btn-bg"></br>

</form>
      <br><br><br>

<br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>