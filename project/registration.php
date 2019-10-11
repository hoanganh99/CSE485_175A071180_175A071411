<?php  
	include'connect.php';
	//session_start(); 
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
								<h4>ĐĂNG KÝ</h4>
								<form action="" method="post">
									Tên người dùng: <input type="text" name="user"> <br>
									Mật khẩu      : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="password" name="pass"> <br>
									<input class="login2" type="submit" name="register" value="Đăng ký"> 
								</form>

								<?php 
									if(isset($_POST['register'])){
										if(!empty($_POST['user']) && !empty($_POST['pass']))
										{
											$user = $_POST['user'];
											$pass = $_POST['pass'];

											$pw=password_hash($pass, PASSWORD_DEFAULT);

											$sql= mysqli_query($conn,"SELECT * from taikhoan where user = '$user'");
											$count = mysqli_num_rows($sql);

											if($count==1)
											{
												echo("Tài khoản đã tồn tại, vui lòng đăng nhập");
											}
											else if($count==0)
											{
												mysqli_query($conn,"INSERT into taikhoan(user, password) values('$user','$pw')") or die(mysqli_error($conn));
												echo("đăng ký thành công, vui lòng quay lại trang chủ để đăng nhập!!!");
												echo("<a href='loginAdmin.php'>Đăng nhập</a>"); 
											}
										}
										else echo "Vui lòng nhập đủ thông tin!!!";
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