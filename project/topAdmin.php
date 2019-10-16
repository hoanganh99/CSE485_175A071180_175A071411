<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Admin</title>
      <!-- icon-->
      <!-- khi mở tap ra có ở phần tiêu đề -->
      <link rel="shortcut icon" href="images/icon.jpg">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <!--boostrap 4-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- css-->
      <link href="css/admin.css" rel="stylesheet">
      <!--jquery-->
	  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
   </head>
   <body>
   	<!-- phần đầu -->
   	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<div class="container-fluid">
			<div class="row" id="page-top">
				<div class="col-md-7">
			        <a class="navbar-brand mr-1" href="admin.php">Xin Chào Admin</a>
			        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			         	<i class="fas fa-bars"></i>
			        </button>
			    </div>	
			    <div class="col-md-3">
			        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			           	<div class="input-group">
				            <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
				            <div class="input-group-append">
				                <button class="btn btn-primary" type="button">
				                  	<i class="fas fa-search"></i>
				                </button>
				            </div>
			            </div>
			        </form>
				</div>
				<div class="col-md-2">
					<!-- phần quản lý -->
		         	<ul class="manages">
		         		<!-- phần thông báo -->
		         		<li>
		         			<div class="manage">
								<div class="bell" >
									<i class="fas fa-bell fa-fw"></i>
								</div>
								<div class="bell1" >
									<i class="fas fa-bell fa-fw"></i>
									<div class="action">
										<div class="main">
											<a href="">Hoạt động</a> <br>
											<a href="">Hoạt động khác</a> 
										</div>
									</div>
								</div>
							</div>
		         		</li>
		         		<!-- phần email -->
		         		<li style="margin-right: 55%;">
		         			<div class="manage1">
								<div class="envelope" >
									<i class="fas fa-envelope"></i>
								</div>
								<div class="envelope1">
									<i class="fas fa-envelope"></i>
									<div class="action1">
										<div class="main1">
											<a href="">Hoạt động</a> <br>
											<a href="">Hoạt động khác</a> 
										</div>
									</div>
								</div>
							</div>
		         		</li>
		         		<!-- phần người dùng -->
		         		<li>
		         			<div class="manage2">
								<div class="user-circle" >
									<i class="fas fa-user-circle"></i>
								</div>
								<div class="user-circle1">
									<i class="fas fa-user-circle"></i>
									<div class="action2">
										<div class="main2">
											<a href="">Hoạt động</a> <br>
											<a href="">Hoạt động khác</a> 
										</div>
									</div>
								</div>
							</div>
		         		</li>
		         	</ul>
				</div>
			</div>
		</div>
	</nav>
</body>
</html>