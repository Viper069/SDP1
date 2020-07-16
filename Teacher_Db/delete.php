<?php 
$ID=$_GET['ID'];

$conn =mysqli_connect("localhost","root","","sdp1");

$sql = "DELETE  FROM teacher WHERE ID='$ID'";

$result = mysqli_query($conn, $sql);
 header('location: Teacher.php');
 ?>