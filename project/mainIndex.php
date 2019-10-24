<?php 
	$conn = mysqli_connect('localhost','root','','login')or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Đại học Nguyễn Tất Thành">
    <meta name="keywords" content="NTTU, Đại học Nguyễn Tất Thành">
    <meta name="author" content="Hoàng Ánh, Huyền Trang">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Nguyễn Tất Thành</title>
	<!-- khi mở tap ra có ở phần tiêu đề -->
    <link rel="shortcut icon" href="images/icon.jpg">
	<!--boostrap 4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--css-->
	<link rel="stylesheet" media="screen" type="text/css" href="css/index.css">
	<!--icon-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!--phần tại sao chọn NTTU-->
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<!--javascript-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
	</script>
	<!--jquery-->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="home">
	<!-- phần tin tức và media -->
			<div class="tintuc_media ">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-9">
							<h4 class="title"><a href="">Tin tức </a></h4>
							<hr style="height: 1px; background-color: #aa914d; width: 35px; margin-top: -1%;">
							<div class="row content d-flex justify-content-end">
								<!-- cột tin tức 1 -->
								<?php
		                            $sql = mysqli_query($conn,"SELECT * FROM baiviet limit 3") or die(mysqli_error($conn));
		                            while($row = mysqli_fetch_assoc($sql)) :
		                         ?>
								<div class="col-12 col-md-4">
									<a href="">
										<img src="http://ntt.edu.vn/web/upload/images/123.JPG" class="w-100">
									</a>
									<a class="content1" href=""><?php echo $row['tieude']; ?></a>
									<p><?php echo $row['noidung']; ?></p>
								</div>
								<?php endwhile; ?>
								<!-- cột tin tức 2 -->
								<!-- <div class="col-12 col-md-4">
									<a href="">
										<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/537ed521aa664c381577.jpg" class="w-100">
									</a>
									<a class="content1" href="">Giảng viên ĐH Nguyễn Tất Thành lọt vào top 1% các nhà bình duyệt từ Việt Nam</a>
									<p>NTTU - Vừa qua, Global Peer Review Awards 2019 đã công bố 10 nhà bình duyệt xuất sắc nhất, trong đó có đại diện đến từ Trường ĐH Nguyễn Tất Thành, TS. Võ Nguyễn Đại Việt. Kết quả này là sự ghi nhận của Global Peer</p>
								</div> -->
								<!-- cột tin tức 3 -->
								<!-- <div class="col-12 col-md-4">
									<a href="">
										<img src="http://ntt.edu.vn/web/upload/images/Khoa-nganh/ketoan-taichinh-thumb.png" class="w-100">
									</a>
									<a class="content1" href="">ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo</a>
									<p>NTTU - ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo...</p>
								</div> -->
								<div class="xemthem">
									<div class="" style="text-align:end;">
										<a href="">
											<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
											Xem thêm 
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<h4 class="title"><a href="">Media</a></h4>
							<hr style="height: 1px; background-color: #aa914d;width: 35px; margin-top: -2%;">
							<div class="row content">
								<div class="col-12 video">
									<a href="">
										<iframe width="270" height="140" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</a>
									<div class="description">
										<ul>
											<li>
												<a href="#"><i class="fa fa-angle-right"></i>ĐIỂM TIN THÁNG 8</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-angle-right"></i>ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-angle-right"></i>NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="xemthem">
								<div class="" style="text-align:end;">
									<a href="">
										<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
										Xem thêm 
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- phần lý do chọn trường Nguyễn Tất Thành -->
			<div class="reason">
				<div class="wrapper ">
					<div class="wrapper-reason">
						<div class="title">
							<b>TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH?</b>
							<div class="d-flex justify-content-center">
								<hr>
							</div>
						</div>
						<!-- nội dung bên trong -->
						<div class="content">
							<div class="carousel_wrapper_track">
								<section class="center slider">
								    <div class="item">
								      <img src="http://ntt.edu.vn/web/upload/images/hp_nguoithay-01.svg">
								      <div class="main">
								      	<h5>Chuẩn 3 sao QS-Starts</h5>
								      	<p>Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.ếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.ếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.	</p>
								      </div>
								    </div>

								    <div class="item">
								      <img src="http://ntt.edu.vn/web/upload/images/hp_xhoi-01.svg">
								      <div class="main">
								      	<h5>Đạt chuẩn chất lượng quốc gia</h5>
								      	<p>Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
								      </div>
								    </div>

								    <div class="item">
								      <img src="http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg">
								      <div class="main">
								      	<h5>Đại học hạnh phúc</h5>
								      	<p>Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
								      </div>
								    </div>

								    <div class="item">
								      <img src="http://ntt.edu.vn/web/upload/images/hp_sinhvien-01.svg">
								      <div class="main">
								      	<h5>Top 10 thương hiệu nổi tiếng</h5>
								      	<p>Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
								      </div>
								    </div>

								    <div class="item">
								      <img src="http://ntt.edu.vn/web/upload/images/hp_doanhnghiep-01.svg">
								      <div class="main">
								      	<h5>95% sinh viên tốt nghiệp có việc làm</h5>
								      	<p>Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
								      </div>
								    </div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr style="margin-right: 8%; margin-left: 8%;">
			
			<!-- phần hợp tác quốc tế, môi trường học tập và sự kiện nổi bật -->
			<div class="tintuc_moitruong_sukien">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-4">
							<h4 class="title">Hợp tác quốc tế </h4>
							<hr style="height: 1px; background-color: #aa914d;width: 35px; margin-top: -1%; margin-left: -0.5%;">
							<div class="row content">
								<div class="col-12">
									<a href="">
										<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/DSC04631.JPG" class="w-100">
									</a>
									<a class="content1" href="">Khoa Công nghệ Sinh học ĐH Nguyễn Tất Thành làm việc với ĐH Hiroshima</a>
									<p>NTTU - Sáng ngày 17/09/2019, khoa Công nghệ Sinh học Trường ĐH Nguyễn Tất Thành đã có buổi làm việc với ĐH Hiroshima (Nhật Bản)</p>
									<div class="xemthem">
										<a href="">
											<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
											Xem thêm 
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<h4 class="title">Môi trường học tập</h4>
							<hr style="height: 1px; background-color: #aa914d;width: 35px; margin-top: -1%; margin-left: -0.5%;">
							<div class="row content">
								<div class="col-md-12">
									<a href="">
										<img src="http://ntt.edu.vn/web/upload/images/3e3.JPG" class="w-100">
									</a>
									<a class="content1" href="">Tìm hiểu về các câu lạc bộ tại Trường ĐH Nguyễn Tất Thành</a>
									<p>NTTU - Những năm gần đây, bên cạnh việc nâng cao chất lượng đào tạo, Trường ĐH Nguyễn Tất Thành không ngừng phát triển mô hình câu lạc bộ sinh viên nhằm tạo môi trường học tập và vui chơi tốt nhất cho người học. Thông qua mô hình CLB, các bạn sinh viên có thể dễ dàng trao đổi kiến</p>
									<div class="xemthem">
										<a href="">
											<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
											Xem thêm 
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<h4 class="title">Sự kiện nổi bật</h4>
							<hr style="height: 1px; background-color: #aa914d;width: 35px; margin-top: -1%; margin-left: -0.5%;">
							<div class="row content">
								<div class="col-md-12 noibat">
									<div class="row item_noibat">
										<div class="col-3 col-md-3 day">
											<span>Oct</span>
											<b>10</b>
										</div>
										<div class="col-9 col-md-9">
											<a href="#">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Nguyễn Tất Thành</a>
											<ul>
												<li class="line-1">
													<i class="fas fa-clock"></i>
													07:30
												</li>
												<li class="line-2">
													| Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
													<hr>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="row item_noibat">
										<div class="col-3 col-md-3 day">
											<span>Oct</span>
											<b>05</b>
										</div>
										<div class="col-9 col-md-9">
											<a href="#">Lễ tốt nghiệp cho Sinh viên bậc Đại học liên thông từ Trung cấp khóa 2016; bậc Cao đẳng liên thông từ Trung cấp khóa 2017</a>
											<ul>
												<li class="line-1">
													<i class="fas fa-clock"></i>
													07:30
												</li>
												<li class="line-2">
													| Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
													<hr>
												</li>
											</ul>
										</div>
									</div>

									<div class="row item_noibat">
										<div class="col-3 col-md-3 day">
											<span>Sep</span>
											<b>25</b>
										</div>
										<div class="col-9 col-md-9">
											<a href="#">Đại hội đại biểu Đoàn TNCS Hồ CHí Minh - Trường ĐH Nguyễn Tất Thành lần VII, nhiệm kỳ 2019 - 2022</a>
											<ul>
												<li class="line-1">
													<i class="fas fa-clock"></i>
													07:30
												</li>
												<li class="line-2">
													| Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
													<hr>
												</li>
											</ul>
										</div>
										<div class="xemthem">
											<a href="" style="margin: 0 !important;font-size: 13px !important; color: #024282; font-weight: bolder; ">
												<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
												Xem thêm 
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			
			<!-- phần tự hào là thành viên của -->
			<div class="tuhaolathanhviencua">
				<h6>Tự hào là thành viên của</h6>
				<hr style="height: 1px; background-color: #aa914d;width: 35px; margin-top: 1%; margin-left: 0.5%;">
				<br>
				<div class="tuhao">
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/ifgtm.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/phs.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/hru.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/hca.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/auf.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/cdio.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/bc.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/aun.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="http://ntt.edu.vn/web/partner/logo/apcore.png">
							<img src="" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/stc.png" alt="">
						</a>
					</div>
					<div class="actice">
						<a href="">
							<img src="http://ntt.edu.vn/web/partner/logo/avnuc.png" alt="">
						</a>
					</div>
				</div>
			</div>
	</div>
</body>
		<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript">
			// jquery
			// menu3, có thể chạy chậm chậm ra
			$( document ).ready(function() 
				{
			    	// phần responsive, ảnh hưởng tới menu1
	    	 	$('.content-responsive').hide();
		    	$('#showMenuRes').click(function()
		    	{
		    		$('.content-responsive').slideToggle();
	    		});

		    	// phần tại sao chọn trường nguyễn tất thành
		    	$(".center").slick(
		    	{
		    		slidesToShow: 3,
				  	slidesToScroll: 1,
				  	autoplay: true,
				  	autoplaySpeed: 1200,
			    });

			    // phần tự hào là thành viên của
			    $('.tuhao').slick(
			    {
				  slidesToShow: 6,
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 1000,
				});
			});
</script>
</html>