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
	<style type="text/css">.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 7px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
  z-index: 2;
  text-decoration-style: wavy;
}

.dropdown-content a {
  color: black;
  padding: 2px ;
  text-decoration: none; 
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block; }

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>
<body>
	<div class="wrapper">
		<nav>
			<img src="loo.jpg" class ="img" alt="logo">	
			 <ul>
			 <li><a href="main.php"class="btn btn-success">HOME</a></li>
			 <li><a href="#"class="btn btn-success">ABOUT</a></li>
			 <li>
			 	<div class="dropdown">
  <button class="dropbtn btn btn-success">ACADEMIC</button>
  <div class="dropdown-content">
    <a href="../User/student.php">Student Panel</a>
    <a href="../User/Teacher.php">Teacher Panel</a>
  </div>
</div>

			 </li>
			 <li><a href="#"class="btn btn-success">GALLERY</a></li>
			 <li><a href="#"class="btn btn-success">BLOGS</a></li>
			 <li><a href="../Result/result.php" class="btn btn-success">RESULT</a></li>
			 <li><a href="#" class="btn btn-success">CONTACTS</a></li>
			 <li><a href="../Login/login.php" class="btn btn-light" >Sign In</a></li>

			 </ul>		
		</nav>
		<div class="section"></div>
</head>

<body>
<h1 style="color: white;"><strong>Teacher List</strong></h1><br>
	<table class="table table-striped" style="color: white;
	background-color: initial;" >
		<TR>
			<th>ID</th>
			<th>Name</th>
			<th>Phone_Number</th>
			<th>Address</th>
			<th>Email</th>
			
		</TR>
  <?php while($row=mysqli_fetch_assoc($result)){ 
    ?>
		<tr>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Phone_Number']; ?></td>
			<td> <?php echo $row['Address'] ?></td>
			<td><?php echo $row['Email']; ?></td>
					</tr>
  <?php }?>
	</table>

<br><br><br><br><br><br><br>

	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>