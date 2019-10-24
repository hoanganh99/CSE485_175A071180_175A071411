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
      <!--icon-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
               <ul style="background-color: rgb(43, 90, 132);">
                  <li class="trangchu">
                     <a href="indexAdmin.php">
                        <span>Quản lý khóa học</span>
                     </a>
                  </li>
                  <li class="active">
                     <a href="top.php">
                        <span>Quản lý đăng ký</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="main.php" >
                        <span> Quản lý học viên</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="footer.php">
                        <span>Quản lý thi</span>
                  </a>
                  </li> 
                  <li class="active">
                     <a href="registration.php" >
                        <span>Thống kê</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="login.php">
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
            
            <div class="MENU">
               <div class="menu_main">
                  <h3>Main Menu</h3>
                    <ul>
                     <li>
                        <a href="admin.php">
                           <span>Thông tin khóa học</span>
                        </a>
                     </li>
                     <hr>
                     <li> 
                        <a class="menu_main1" href="qllophoc.php">
                           <span>QL Lớp học</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href=qlmonhoc.php>
                           <span>QL Môn học</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href="phanconggiangday.php">
                           <span>PCGD cho giáo viên</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href="phancongmonhoc.php">
                           <span>Phân công môn cho lớp</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href="thoigianbieu.php">
                           <span>Quản lý thời gian biểu</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="title-module">
                  <h3>Sửa Danh Sách Phân Công Cho Lớp Học</h3>
                  <form name="edit_course">
                     <table class="table-form-edit" align="center" bgcolor="#FFFFFF">
                        
                        <tr>
                           <td width="180">Mã môn</td>
                           <td width="300"><input type="text" value="E003" name="makh" size="40"></td>
                        </tr>
                        <tr>
                           <td>Tên môn</td>
                           <td><input type="text" value="English" size="40"></td>
                        </tr>
                        <tr>
                           <td>Mô tả</td>
                           <td><textarea cols="30" rows="5">Tiếng Anh căn bản</textarea></td>
                        </tr>                   
                        <tr>
                           <td align="center" ></td>
                           <td><a href="phancongmonhoc.php"><input type="submit" value="Lưu lại" name="submit"></a><input type="reset" value="Reset"></td>
                        </tr>
                     </table>
                  </form>
               </div>
            </div>
            <br>
            <hr style="margin-left: 7%; margin-right: 7%;">
            <!-- BEGIN: FOOTER -->
            <div id="ja-footer" class="clearfix">
               <small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
                  <a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.
               </small>
            </div>
         </div>


         <!-- sau khi click -->
         <div id="bd1">
           <div class="main">
               <ul style="background-color: rgb(43, 90, 132);">
                  <li class="trangchu">
                     <a href="indexAdmin.php">
                        <span>Quản lý khóa học</span>
                     </a>
                  </li>
                  <li class="active">
                     <a href="top.php">
                        <span>Quản lý đăng ký</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="main.php" >
                        <span> Quản lý học viên</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="footer.php">
                        <span>Quản lý thi</span>
                  </a>
                  </li> 
                  <li class="active">
                     <a href="registration.php" >
                        <span>Thống kê</span>
                     </a>
                  </li> 
                  <li class="active">
                     <a href="login.php">
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
            
            <div class="MENU">
               <div class="menu_main">
                  <h3>Main Menu</h3>
                    <ul>
                     <li>
                        <a href="admin.php">
                           <span>Thông tin khóa học</span>
                        </a>
                     </li>
                     <hr>
                     <li> 
                        <a class="menu_main1" href="qllophoc.php">
                           <span>QL Lớp học</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href=qlmonhoc.php>
                           <span>QL Môn học</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href="phanconggiangday.php">
                           <span>PCGD cho giáo viên</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href="phancongmonhoc.php">
                           <span>Phân công môn cho lớp</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href="thoigianbieu.php">
                           <span>Quản lý thời gian biểu</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="melu">
                  <h3>Danh Sách Phân Công Môn Cho Lớp</h3>
                  <table class="list-course" bgcolor="#FFFFFF" border="1">
                     <tr class="title">
                        <td width="20"><input type="checkbox"></td>
                        <td width="40">Sửa</td>
                        <td width="40">Xóa</a></td>
                        <td width="100">Mã lớp</td>
                        <td width="250">Tên lớp</td>
                        <td width="100">Tên môn</td>
                        <td width="100">Thời lượng</td>                                          
                     </tr>
                     <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="fa fa-edit"></i></a></td>
                        <td><a href=""><i class="fa fa-trash-alt"></i></a></td>
                        <td><a href="sualophoc.html">E032</a></td>
                        <td class="content">Lớp tiếng Anh giao tiếp dành cho học sinh lứa tổi tiểu học</td>
                        <td>English</td>
                        <td>30 buổi</td>                                  
                     </tr>
                     <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="fa fa-edit"></i></a></td>
                        <td><a href=""><i class="fa fa-trash-alt"></i></a></td>
                        <td><a href="sualophoc.html">E032</a></td>
                        <td class="content">Lớp tiếng Anh giao tiếp dành cho học sinh lứa tổi tiểu học</td>
                        <td>English</td>
                        <td>30 buổi</td>                                  
                     </tr>
                     <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="fa fa-edit"></i></a></td>
                        <td><a href=""><i class="fa fa-trash-alt"></i></a></td>
                        <td><a href="sualophoc.html">E032</a></td>
                        <td class="content">Lớp tiếng Anh giao tiếp dành cho học sinh lứa tổi tiểu học</td>
                        <td>English</td>
                        <td>30 buổi</td>                                   
                     </tr>
                     <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="fa fa-edit"></i></a></td>
                        <td><a href=""><i class="fa fa-trash-alt"></i></a></td>
                        <td><a href="sualophoc.html">E032</a></td>
                        <td class="content">Lớp tiếng Anh giao tiếp dành cho học sinh lứa tổi tiểu học</td>
                        <td>English</td>
                        <td>30 buổi</td>                                   
                     </tr>
                     <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="fa fa-edit"></i></a></td>
                        <td><a href=""><i class="fa fa-trash-alt"></i></a></td>
                        <td><a href="sualophoc.html">E032</a></td>
                        <td class="content">Lớp tiếng Anh giao tiếp dành cho học sinh lứa tổi tiểu học</td>
                        <td>English</td>
                        <td>30 buổi</td>                                  
                     </tr>
                  </table>
                  <br>
                  <div class="task">
                     <a href="themkhoahoc.html"><input type="button" value="Thêm mới" name="Thêm mới"></a>
                     <input type="button" name="Xóa" value="Xóa">  
                     <a href="suakhoahoc.html"><input type="button" name="Cập nhật" value="Cập nhật"></a>
                  </div>
               </div>
            </div>
            <br>
            <hr style="margin-left: 7%; margin-right: 7%;">
            <!-- BEGIN: FOOTER -->
            <div id="ja-footer" class="clearfix">
               <small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
                  <a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.
               </small>
            </div>
      </div>

      <!-- Scroll to Top Button-->
      <div>
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
            $('#bd').show();
            $('#bd1').hide();
            $('#sidebarToggle').show();
            $('#sidebarToggle1').hide();
            $('#sidebarToggle').click(function()
            {
               $('#bd').hide();
               $('#bd1').show("show");
               $('#sidebarToggle1').show();
               $('#sidebarToggle').hide();
            });
            $('#sidebarToggle1').click(function()
            {
               $('#sidebarToggle').show();
               $('#sidebarToggle1').hide();
               $('#bd1').hide();
               $("#bd").show("slow");
            });
   	   });
         
         //

      
      </script>
</html>