<?php 
$conn = mysqli_connect("localhost","root","","sdp1");
$sql = " SELECT * FROM notice ";
$result = mysqli_query($conn,$sql);
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
		<a href="insert.php" class="btn btn-info float-right" >Add notice</a><br><br>
		
<table class="table table-striped" style="color: white;">
		

		<tr>
			<th>SL_No</th>
			<th>Notice</th>
			<th>Action</th>
		</tr>
		<?php while ($row = mysqli_fetch_assoc($result)) {
				 ?>
		<tr>
			<td> <?php echo $row['SL_No']; ?> </td>
			<td> <?php echo $row['Notice']; ?> </td>
			<td>
				<a href="edit.php?id=<?php echo $row['SL_No']; ?>" class="btn btn-primary" >Edit</a><a href="delete.php?id=<?php echo $row['SL_No']; ?>" onclick = "return confirm('Are you really want to Delete this data?')" class="btn btn-danger" >Delete</a>

			</td>
		</tr>
	<?php } ?>
	</table>
<br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>