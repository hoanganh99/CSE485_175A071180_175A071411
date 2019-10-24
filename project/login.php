<?php
	ob_start();
	session_start();
	
	include'connect.php';
	if(isset($_SESSION['name']))
	{
		header('location:admin.php');
	}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Đại học Nguyễn Tất Thành">
    <meta name="keywords" content="NTTU, Đại học Nguyễn Tất Thành">
    <meta name="author" content="Hoàng Ánh, Huyền Trang">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập hệ thống Egov Copyright © 2012 TRƯỜNG ĐẠI HỌC NGUYỄN TẤT THÀNH1</title>
    <!-- khi mở tap ra có ở phần tiêu đề -->
    <link rel="shortcut icon" href="images/icon.jpg">
	<!--boostrap 4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--css-->
	<link rel="stylesheet" media="screen" type="text/css" href="css/login.css">
	<!--javascript-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
	</script>
	<!--jquery-->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="login">
			<div class="main">
				<div class="container-fluid">
					<div class="row top">
						<div class="col-md-6 image1">
							<img src="images/loginAdmin.jpg" alt="">
						</div>
						<div class="col-md-6 image2">
							<img src="images/loginAdmin1.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 image">
								<img src="images/loginAdmin2.jpg" alt="">
								<p>Chào mừng đến với</p>
								<div  class="content1">Electronic
									<p>Document</p>
								</div>
							</div>
							<div class="col-md-8 content">
								<h4>ĐĂNG NHẬP</h4>
								<form action="" method="post">
									Tên người dùng: <input type="text" name="user"> <br>
									Mật khẩu      : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="password" name="pass"> <br>
									<input class="registration" type="submit" name="registration" value="Đăng ký">
									<input class="index" type="submit" name="index" value="Trang chủ">
									<input class="login2" type="submit" name="login" value="Đăng nhập">
									
								</form>
								<?php  
									if (isset($_POST['index'])) 
									{
										header("location: index.php");
										ob_enf_fluck();
									}
								?>

								<?php  
									if (isset($_POST['registration'])) 
									{
										header("location: registration.php");
										ob_enf_fluck();
									}
								?>

								<?php 
									if(isset($_POST['login']))
									{
										if(!empty($_POST['user']) && !empty($_POST['pass']))
										{
											$user = $_POST['user'];
											$pass = $_POST['pass'];

											$sql = mysqli_query($conn,"SELECT * from taikhoan where user = '{$user}'");
											$row=mysqli_fetch_assoc($sql);

											if(password_verify($pass, $row['password']))
											{
												if($row['level']==1)
												{
													$_SESSION['name'] = $user;
													header("location: admin.php");
													ob_enf_fluck();
												}
												else if($row['level']==0)
												{
													$_SESSION['name'] = $user;
													header("location: user.php");
													ob_enf_fluck();
												}
											}
											else
											{
												echo 
												"<div style='color: red; font-weight: bolder;'>
													Sai mật khẩu !!!
												</div>";
											} 
										}
										else 
										{
											echo
											"<div style='color: red; font-weight: bolder; margin-left: -15%;'>
												Vui lòng nhập đủ thông tin !!!
											</div>"; "";
										}
									}
								 ?>
							</div>
						</div>
					</div>
				</div>
				<div class="footer">
					© Copyright © 2012 TRƯỜNG ĐẠI HỌC NGUYỄN TẤT THÀNH1 <br>
					Địa chỉ: 298A-300A Nguyễn Tất Thành, P.13, Q.4, TP.HCM <br>
					Điện thoại: 84-862619423 - Fax:
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>