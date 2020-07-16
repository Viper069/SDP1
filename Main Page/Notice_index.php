<?php 
$conn = mysqli_connect("localhost","root","","sdp1");
$sql = " SELECT * FROM notice ";
$result = mysqli_query($conn,$sql);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="4">
		<tr>
		
		
			<th>SL_No</th>
			<th>Notice</th>
		</tr>
		<?php while ($row = mysqli_fetch_assoc($result)) {
				 ?>
		<tr>
			<td> <?php echo $row['SL_No']; ?> </td>
			<td> <?php echo $row['Notice']; ?> </td>
			
		</tr>
	<?php } ?>
	</table>

</body>
</html>