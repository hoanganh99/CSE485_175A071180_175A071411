<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Đại học Nguyễn Tất Thành">
    <meta name="keywords" content="NTTU, Đại học Nguyễn Tất Thành">
    <meta name="author" content="Hoàng Ánh, Huyền Trang">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Nguyễn Tất Thành</title>
	<!--boostrap 4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!--icon-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<!--phần tại sao chọn NTTU-->
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<!--javascript-->
	<script type="text/javascript">
	</script>
	<!--jquery-->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="home">
		<!-- Trước khi co lại -->
		<div class="head head-desktop">
			<!--Dòng hotline-->
			<div class="wrapper row top_head">
				<div class="col-md-3 hotline">
					HOTLINE: <span id="hotline-1">0902.298.300 - 0906.298.300</span>
				</div>
				<div class="col-md-5 ">
					<a class="col" href="">SINH VIÊN</a>
					<a class="col" href="">GIẢNG VIÊN</a>
					<a class="col" href="">ĐÀO TẠO QUỐC TẾ</a>
				</div>
				<div class="col-md-4 input d-flex justify-content-end">
					<form>
						<input type="text" name="" placeholder="Tìm kiếm thông tin ">
						<i class="fa fa-search" aria-hidden="true"></i>
					</form>
					<!-- Tạo nút thả xuống -->
					<div class="dropdown">
					    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					      <a href=""><img src="images/england.jpg" alt=""></a>
					    </button>
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="#"><img src="images/vn.jpg" alt=""></a>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<!--Co dãn sẽ ko bị lộn xộn-->
		<div class="head-responsive">
					<div class="row">
						<div class="col left">
							<i style="color: white;" id="showMenuRes" class="fa fa-bars c-blue-a5"></i>
						</div>
						<div class="col-10 input">
							<form>
								<input type="text" name="" placeholder="Tìm kiếm thông tin ">
								<button>
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>		
						</div>
						<div class="col right">
							<!-- Tạo nút thả xuống -->
							<div class="dropdown">
							    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							      <a href=""><img src="images/england.jpg" alt=""></a>
							    </button>
							    <div class="dropdown-menu">
							      <a class="dropdown-item" href="#"><img src="images/vn.jpg" alt=""></a>
							    </div>
							</div>
						</div>
					</div>
				</div>
			<!--Phần menu 1-->
			<div class="menu">
				<!-- start responsive -->
				<div class="content-responsive">
					<ul>
						<li><a href="#">HOTLINE: 0902.298.300 - 0906.298.300</a></li>
						<li><a href="#">SINH VIÊN</a></li>
						<li><a href="#">GIẢNG VIÊN</a></li>
						<li><a href="#">ĐÀO TẠO QUỐC TẾ</a></li>
					</ul>		
				</div>
				<!--Hàng thứ 2, menu 2-->
				<div class="wrapper">
					<nav class="navbar navbar-expand-lg">
					  	<img src="images/logo_ntt.png">
					  <button style="outline: none;" class="navbar-toggler" type="button" >
					    <i id="showCollapse2" style="border: 1px solid #d0d0d0;padding: 10px;" class="fa fa-bars c-blue-a5"></i>
					  </button>
					  <div class="collapse navbar-collapse row" id="navbarNav">
					    <ul class="navbar-nav ">
					      <li class="nav-item col">
					      	<i class="fa fa-info-circle"></i>
					        <a class="nav-link" href="#">Giới thiệu </a>
					      </li>
					      <li class="nav-item col">
					      	<i class="fa fa-graduation-cap"></i>
					        <a class="nav-link" href="#">Tuyển sinh </a>
					      </li>
					      <li class="nav-item col">
					      	<i class="fa fa-book"></i>
					        <a class="nav-link" href="#">Đào tạo </a>
					      </li>
					      <li class="nav-item col">
					      	<i class="fa fa-bookmark"></i>
					        <a class="nav-link" href="#">Nghiên cứu </a>
					      </li>
					      <li class="nav-item col-3">
					      	<i class="fas fa-handshake"></i>
					        <a class="nav-link" href="#">Hợp tác doanh nghiệp</a>
					      </li>
					    </ul>
					  </div>
					</nav>
				</div>
			</div>
			<!--Phần slideshow-->
			<div class="slide">
				<div class="wrapper slide-wrapper">
					<!-- slide -->
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="triangle-wrapper">
							<!-- Nút triangle -->
							<div class="triangle">
								<a id="showCollapse"><i class="fa fa-bars c-blue-a5"></i></a>
							</div>
						</div>
					  	<div class="carousel-inner">
						  	<!-- slide thứ nhất -->
						  	<div class="carousel-item active">
						      	<img class="d-block w-100" src="http://ntt.edu.vn/web/upload/images/slider/Tham-van-chuyen-gia-NTTU_Web-Slider.jpg" alt="First slide">
						      	<div class="title">
									<h3>Chính sách học bổng của trường đại học Nguyễn Tất Thành</h3>
                        		</div>
						    </div>
						    <!-- Slide thứ 2 -->
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="http://ntt.edu.vn/web/upload/images/slider/Chinh-sach-hoc-bong-NTTU_Web-Slider.jpg" alt="Second slide">
						      	<div class="title">
                            		<h3>Chính sách học bổng Trường Đại học Nguyễn Tất Thành năm 2019</h3>
                        		</div>
						    </div>
						    <!-- slide thứ 3 -->
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="http://ntt.edu.vn/web/upload/images/slider/Lien-thong-NTTU_Web-Slider.jpg" alt="Third slide">
						      	<div class="title">
                            		<h3>Tuyển sinh liên thông 2019</h3>
                        		</div>
						    </div>
						    <!-- slide thứ 4 -->
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="http://ntt.edu.vn/web/upload/images/slider/Thac-sy-2019-NTTU_Web-Slider.jpg" alt="Third slide">
						      	<div class="title">
                            		<h3>Tuyển sinh trình độ Thạc sỹ đợt 1 năm 2019 tại ĐH Nguyễn Tất Thành</h3>
                        		</div>
						    </div>
						    <!-- slide thứ 5 -->
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="http://ntt.edu.vn/web/upload/images/slider/Vien%20dao%20tao%20quoc%20te%20NTT%202019_NIIE.jpg" alt="Third slide">
						      	<div class="title">
                            		<h3>Viện đào tạo quốc tế NTT (NIIE) - "Cử nhân quốc tế, Cơ hội toàn cầu"</h3>
                        		</div>
						    </div>
						</div>
						<!-- Phần bên trong của nút triangle -->
					  	<div class="collapse-handmade" id="collapse-handmade">
					  		<div class="row">
					  			<div class="col-md-6 col-lg-9 row">
					  				<!-- Giới thiệu chung -->
					  				<div class="col-12 col-md-6 col-lg-4 item">
						  				<ul>
						  					<li><h5><a href="">Giới thiệu chung </a></h5></li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">giới thiệu chung </a> 	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Toàn cảnh ĐH Nguyễn Tất Thành</a> 	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Hệ thống Cơ sở vật chất</a> 	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Thông tin 3 công khai </a> 	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Đảm bảo chất lượng</a> 	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Phát triển bền vững</a>
						  					</li>
						  				</ul>
						  			</div>
						  			<!-- Tuyển sinh -->
						  			<div class="col-12 col-md-6 col-lg-4 item">
						  				<ul>
						  					<li><h5><a href="">Tuyển sinh</a>  </h5></li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Các bậc đào tạo</a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Thông tin tuyển sinh</a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Chính sách học bổng</a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Hướng nghiệp</a>
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Xét tuyển trực tuyến</a>
						  					</li>
						  				</ul>
						  			</div>
						  			<!-- Đào tạo -->
						  			<div class="col-12 col-md-6 col-lg-4 item">
						  				<ul>
						  					<li><h5><a href="">Đào tạo</a>  </h5></li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Khối Khoa học sức khỏe </a>
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Khối Kinh tế - Quản trị </a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Khối Kỹ thuật - Công nghệ </a>
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Khối Khoa học xã hội - Nhân văn</a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Khối Mỹ thuật - Nghệ thuật</a> 	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Khối đào tạo quốc tế</a>
						  					</li>
						  				</ul>
						  			</div>
						  			<!-- Hợp tác doanh nghiệp -->
						  			<div class="col-12 col-md-6 col-lg-4 item">
						  				<ul>
						  					<li><h5><a href="">Hợp tác doanh nghiệp</a>  </h5></li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Giới thiệu việc làm</a>
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Giới thiệu thực tập</a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Câu lạc bộ Doanh nghiệp</a>
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Ban liên lạc Cựu sinh viên </a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Liên kết - Hợp tác </a>
						  					</li>
						  				</ul>
						  			</div>
						  			<!-- Nghiên cứu -->
						  			<div class="col-12 col-md-6 col-md-4 item">
						  				<ul>
						  					<li><h5><a href="">Nghiên cứu</a>  </h5></li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Hoạt động khoa học công nghệ</a>
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Viện - Trung tâm nghiên cứu</a>	
						  					</li>
						  					<li>
						  						<i class="fa fa-angle-double-right"></i>
						  						<a href="">Công bố khoa học</a>
						  					</li>
						  				</ul>
						  			</div>
					  			</div>
					  			<!-- Các trang liên quan -->
					  			<div class="col-md-6 col-lg-3 sociaty">
					  				<ul>
					  					<li><a href=""><i class="fab fa-facebook-square"></i>Facebook</a></li>
					  					<li><a href=""><i class="fab fa-google-plus-g"></i>Google Plus</a></li>
					  					<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
					  					<li><a href=""><i class="fas fa-envelope"></i>E-mail</a></li>
					  					<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
					  					<li><a href=""><i class="fa fa-wechat"></i>Zalo</a></li>
					  					<li><a href=""><i class="fa fa-mortar-board"></i>E-office</a></li>
					  					<li><a href=""><i class="fa fa-users"></i>Tuyển dụng</a></li>
					  				</ul>
					  			</div>
					  		</div>
					  	</div>
						<!-- Nút chuyển slide -->
						<div class="line-slide">
							<div class="control-button">
								<div class="right">
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								    	<i class="fas fa-angle-left"></i>
								  	</a>
								  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								    	<i class="fas fa-angle-right"></i>
								  	</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>