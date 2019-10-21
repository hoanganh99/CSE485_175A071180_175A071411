<?php
   ob_start();
   session_start(); 
   
   include'connect.php';
   if(!$_SESSION['name']){
      header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Admin</title>
      <!-- khi mở tap ra có ở phần tiêu đề -->
      <link rel="shortcut icon" href="images/icon.jpg">
      <!--boostrap 4-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!--css-->
      <link rel="stylesheet" type="text/css" href="css/admin.css">
      
      </style>
      <!--javascript-->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript">
      </script>
      <!--jquery-->
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
   <body>
     
      
      
      <div class="admin">
         <!-- phần đầu -->
         <?php  
            include("topAdmin.php");
         ?>

         <!-- phần main -->
         <!-- trước khi click -->
         <!-- BEGIN: MAIN NAVIGATION -->
         <div id="bd">
            <div class="main">
               <ul>
                  <li class="active">
                     <a href="indexAdmin.php">
                        <span>QL Trang chủ</span>
                     </a>
                  </li>
                  <li class="active">
                     <a href="top.php">
                        <span>QL Phần đầu TC</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="main.php" >
                        <span>QL phần thân TC</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="footer.php">
                        <span>QL phần cuối TC</span>
                  </a>
                  </li> 
                  <li class="active">
                     <a href="registration.php" >
                        <span>QL Đăng ký</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="login.php">
                        <span>QL Đăng nhập</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="hethong.html">
                        <span>Hệ thống</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="logout.php">
                        <span>Đăng xuất</span>
                     </a>
                  </li> 
               </ul>
            </div>
            
            
            <div class="melu">
               <h3>Main Menu</h3>
               <ul >
                  <li>
                     <a href="admin.php">
                        <span>Thông tin trang chủ</span>
                     </a>
                  </li>
                  <li>
                     <a href="dslophoc.html">
                        <span>QL Phần đầu trang chủ</span>
                     </a>
                  </li>
                  <li>
                     <a href="dsgiaovien.html">
                        <span>QL Phần giữa trang chủ</span>
                     </a>
                  </li>
                  <li>
                     <a href="dsmonhoc.html">
                        <span>QL Phần cuối trang chủ</span>
                     </a>
                  </li>
               </ul>  
            </div>

               <!-- BEGIN: FOOTER -->
               <div id="ja-footer" class="clearfix">
                  <small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
                     <a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.
                  </small>
               </div>
            </div>
         </div>


         <!-- sau khi click -->
          <div id="bd1">
            <div class="main">
               <ul>
                  <li class="active">
                     <a href="indexAdmin.php">
                        <span>QL Trang chủ</span>
                     </a>
                  </li>
                  <li class="active">
                     <a href="top.php">
                        <span>QL Phần đầu TC</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="main.php" >
                        <span>QL phần thân TC</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="footer.php">
                        <span>QL phần cuối TC</span>
                  </a>
                  </li> 
                  <li class="active">
                     <a href="registration.php" >
                        <span>QL Đăng ký</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="login.php">
                        <span>QL Đăng nhập</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="hethong.html">
                        <span>Hệ thống</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="logout.php">
                        <span>Đăng xuất</span>
                     </a>
                  </li> 
               </ul>
            </div>
            
            
            <div class="menu_main">
               <h3>Main Menu</h3>
            </div>
            <ul>
               <ul>
                  <li>
                     <a href="admin.php">
                        <span>Thông tin trang chủ</span>
                     </a>
                  </li>
                  <li>
                     <a href="dslophoc.html">
                        <span>QL Phần đầu trang chủ</span>
                     </a>
                  </li>
                  <li>
                     <a href="dsgiaovien.html">
                        <span>QL Phần giữa trang chủ</span>
                     </a>
                  </li>
                  <li>
                     <a href="dsmonhoc.html">
                        <span>QL Phần cuối trang chủ</span>
                     </a>
                  </li>
               </ul>  

               <!-- BEGIN: FOOTER -->
               <div id="ja-footer" class="clearfix">
                  <small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
                     <a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.
                  </small>
               </div>
            </div>
         </div>

            

         
         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
         </a>
      </div>

   	
  	</body>
   	<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
   	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	   <script type="text/javascript" src="slick/slick.min.js"></script>
	   <script type="text/javascript">

   	   //phần topAdmin - phần quản lý - phần người dùng
   		$( document ).ready(function() 
   		{
   	    	$('.action2').hide();
   	    	$('.user-circle1').hide();
   	    	$('.user-circle').click(function()
   	    	{
   	    		$('.action2').show();
   	    		$('.user-circle1').show();
   	    	 	$('.user-circle').hide();
   	    	});
   	    	$('.user-circle1').click(function()
   	    	{
   	    	 	$('.action2').hide();
   	    	 	$('.user-circle').show();
   	    	 	$('.user-circle1').hide();
   	    	});
         });


         //phần main
         $( document ).ready(function() 
         {
            $('#bd1').show();
            $('#bd').hide();
            $('#sidebarToggle').show();
            $('#sidebarToggle1').hide();
            $('#sidebarToggle').click(function()
            {
               $('#bd1').hide();
               $('#bd').show("show");
               $('#sidebarToggle1').show();
               $('#sidebarToggle').hide();
            });
            $('#sidebarToggle1').click(function()
            {
               $('#sidebarToggle').show();
               $('#sidebarToggle1').hide();
               $('#bd').hide();
               $("#bd1").show("slow");
            });
   	   });
         

      
      </script>
</html>