<?php 
$conn = mysqli_connect("localhost","root","","sdp1");

if(isset($_POST['Submit'])){
	$ID=$_POST['ID'];
	$Name= $_POST['Name'];
	$Phone_Number=$_POST['Phone_Number'];
	$Address=$_POST['Address'];
	$Email =$_POST['Email'];

	$sql= "INSERT INTO teacher(ID,Name,Phone_Number,Address,Email) VALUES('$ID','$Name','$Phone_Number','$Address','$Email')";
	$result= mysqli_query($conn, $sql);
	header('location: Teacher.php');

}

 ?>

<!DOCTYPE html>    
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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
<body >
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


		<form method="POST" align="center" style="background-color: initial; color: white; background-attachment: all;" class="form-control" >
  ID:				<input type="Number" name="ID" placeholder="Enter Teacher ID Here" required="Enter a unique value"class="col-sm-6"></br>
  Name:				<input type="Text" name="Name" placeholder="Enter Your Name Here" required class="col-sm-6"></br>
  Phone_Number:		<input type="number" name="Phone_Number" placeholder="Enter Teacher Name Here" required class="col-sm-6"></br>
  Address:			<input type="Text" name="Address" placeholder="Enter Teacher Number Here" required class="col-sm-6"></br>
  Email:			<input type="Email" name="Email" placeholder="Enter Teacher Email" required class="col-sm-6"></br><br>
  <input type="Submit" name="Submit" class="btn btn-success btn-bg"></br>

</form>

<br><br><br<br><br><br><br><br><br>	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>