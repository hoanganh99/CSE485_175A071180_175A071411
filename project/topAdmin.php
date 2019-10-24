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
      <link rel="shortcut icon" href="images/icon.jpg">
      <!--boostrap 4-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!--css-->
      <link rel="stylesheet" media="screen" type="text/css" href="css/admin.css">
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
   	<!-- phần đầu -->
   	<nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #012b64">
		<div class="container-fluid">
			<div class="row" id="page-top">
				<div class="col-md-8">
			        <a class="navbar-brand mr-1" href="admin.php">Xin Chào Admin</a>
			        <!-- trước khi click -->
			        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			         	<i class="fas fa-bars"></i>
			        </button>
			        <!-- sau khi click -->
			        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle1" href="#">
			         	<i class="fas fa-bars"></i>
			        </button>
			    </div>	
			    <div class="col-md-3">
			        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			           	<div class="input-group">
				            <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
				            <div class="input-group-append">
				                <button class="btn btn-primary" type="button">
				                  	<i class="fas fa-search" ></i>
				                </button>
				            </div>
			            </div>
			        </form>
				</div>
				<div class="col-md-1">
					<!-- phần quản lý -->
		         	<ul class="manage">
		         		<!-- phần người dùng -->
		         		<li>
		         			<div class="manage2">
								<div class="user-circle" >
									<i class="fas fa-user-circle"></i>
								</div>
								<div class="user-circle1">
									<i class="fas fa-user-circle"></i>
									<div class="action2">
										<div class="menu2">
											<a href="">Quản lý tk</a> <br>
											<a href="logout.php">Đăng xuất</a> 
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