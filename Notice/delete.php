<?php 
$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","sdp1");
$sql = "DELETE FROM `notice` WHERE SL_No=$id ";
$result = mysqli_query($conn,$sql);
header('location: Notice_index.php');
 ?>