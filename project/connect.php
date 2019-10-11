<?php 
	$conn = mysqli_connect('localhost','root','','loginAdmin')or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
?>