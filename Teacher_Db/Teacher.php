<?php
$conn = mysqli_connect('localhost','root','','sdp1');
$sql = "SELECT * FROM teacher";
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
<h1 style="color: white"><strong>Teacher Control Panel</strong></h1>

	<br> <br>
<a href="insert.php" class="btn btn-success">Add Teacher Info</a>
<br><br>
	<table align="Center" class="table table-dark table-striped" style="background-color: initial;" >
		<TR>
			<th>ID</th>
			<th>Name</th>
			<th>Phone_Number</th>
			<th>Address</th>
			<th>Email</th>
			<th>Action</th>
		</TR>
  <?php while($row=mysqli_fetch_assoc($result)){ 
    ?>
		<tr>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Phone_Number']; ?></td>
			<td> <?php echo $row['Address'] ?></td>
			<td><?php echo $row['Email']; ?></td>
			<td>
        <a class="btn btn-primary" href="edit.php?ID=<?php echo $row['ID']; ?>">Edit</a>
      <a class="btn btn-danger"  href="delete.php?ID=<?php echo $row['ID']; ?>" onclick="return confirm('Are you really want delete this data')" >Delete</a>
			</td>
		</tr>
  <?php }?>
	</table>
	 
      <br><br><br>

<br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>