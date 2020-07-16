
<?php 
$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","sdp1");

$sql= " SELECT * FROM notice WHERE SL_No=$id ";
$res= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($res);

if (isset($_POST['Update'])) {
	$SL_No=$_POST['SL_No'];
	$Notice=$_POST['Notice'];


	$sql =  " UPDATE `notice` SET `SL_No`='$SL_No',`Notice`='$Notice'  WHERE SL_No=$id ";
	$re= mysqli_query($conn,$sql);
	header('location: Notice_index.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <style type="text/css">
      body{
      	background-image: url(../Image/one.jpg);
      	background-position: center;
      	background-attachment: scroll;
      	height: 650px;
      	width: 1080px;
      	color: #ddd;
      }
      </style>
</head>
<body>
	<br>
	<form method="POST" class="form-control" >
		SL_No:  <input type="number" name="SL_No" value="<?php echo $row['SL_No']; ?>" class ="col-sm-6 form-control" ><br>
		Notice: <input type="text" name="Notice" value="<?php echo $row['Notice'] ?> " class ="col-sm-6 form-control"  ><br>
		<input type="Submit" name="Update" value="Update" class="btn btn-success btn-lg float-xl-right">


	</form>


</body>
</html>