<?php  
	include'connect.php';
	session_start(); 
	ob_start();
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
	<link rel="stylesheet" media="screen" type="text/css" href="css/registration.css">
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
									Tên người dùng: 
									<input type="text" name="user"> <br>
									Mật khẩu:  &emsp;&emsp;&nbsp;&nbsp;&nbsp;
									<input type="password" name="pass"> <br>
									Giới tính: &emsp;&emsp;&emsp;&nbsp;
									<input type="radio" name="sex" value="Nữ"> Nữ
									<input type="radio" name="sex" value="Nam"> Nam <br>
									Ngày sinh: &emsp;&emsp;&nbsp;&nbsp;
									<input type="date" name="birthday" style="width: 49%;"> <br>
									Địa chỉ:   &emsp;&emsp;&emsp;&emsp;
									<input type="text" name="address"> <br>
									Email:     &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
									<input type="text" name="email"> <br>
									SĐT:       &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
									<input type="" name="phonenumber"> <br>
									<input class="login3" type="submit" name="login3" value="Đăng nhập">
									<input class="index" type="submit" name="index" value="Trang chủ">
									<input class="login2" type="submit" name="register" value="Đăng ký"> 
								</form>
								
								<!-- Ấn vào nút đăng nhập ở trang đăng ký -->
								<?php  
									if (isset($_POST['login3']))
									{
										header("location: login.php");
										ob_enf_fluck();
									}
								?>

								<?php  
									if (isset($_POST['index']))
									{
										header("location: index.php");
										ob_enf_fluck();
									}
								?>

								<?php 
									if(isset($_POST['register']))
									{
										if(!empty($_POST['user']) && !empty($_POST['pass'])&& 
											!empty($_POST['sex'])&& !empty($_POST['birthday'])&& 
											!empty($_POST['address'])&& !empty($_POST['email'])&& 
											!empty($_POST['phonenumber']) 
											)
										{
											$user         = $_POST['user'];
											$pass         = $_POST['pass'];
											$sex          = $_POST['sex'];
											$birthday     = $_POST['birthday'];
											$address      = $_POST['address'];
											$email        = $_POST['email'];
											$phonenumber  = $_POST['phonenumber'];

											// băm mật khẩu
											$pw=password_hash($pass, PASSWORD_DEFAULT);

											// kết nối với database
											$sql= mysqli_query($conn,"SELECT * from taikhoan where user = '$user'");
											$count = mysqli_num_rows($sql);

											if($count==1)
											{
												echo
												"<div style='color: red; font-weight: bolder; margin-left: -20%;'>
													Tài khoản đã tồn tại, vui lòng đăng nhập !!!
												</div>";
											}
											else if($count==0)
											{
												// đẩy dl lên db
												mysqli_query($conn,"INSERT into taikhoan(user, password,sex, birthday, address,email,phonenumber) values('$user','$pw','$sex', '$birthday', '$address', '$email', '$phonenumber')") or die(mysqli_error($conn));
												echo
												"<div style='color: red; font-weight: bolder; margin-left: 1%;'> 
													Đăng ký thành công, mời đăng nhập :))
												</div>";
											}
										}
										else 
										{
											echo
											"<div style='color: red; font-weight: bolder; margin-left: -15%;'>
												Vui lòng nhập đủ thông tin !!!
											</div>"; 
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