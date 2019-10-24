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
      <link rel="stylesheet" type="text/css" href="css/user.css">
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
     
      
      
      <div>
         <div class="user">
            <h5>TRƯỜNG ĐẠI HỌC THỦY LỢI</h5>
            <br>
         </div>

         <!-- phần main -->
         <!-- BEGIN: MAIN NAVIGATION -->
         <div id="bd">
            <div class="MENU">
               <div class="menu_main">
                  <h3>Main Menu</h3>
                    <ul>
                     <li>
                        <a href="user.php">
                           <span>Thông tin bài viết</span>
                        </a>
                     </li>
                     <hr>
                     <li> 
                        <a class="menu_main1" href="them_user.php">
                           <span>Đăng bài viết</span>
                        </a>
                     </li>
                     <hr>
                     <li>
                        <a class="menu_main1" href=index.php>
                           <span>Trở về trang chủ</span>
                        </a>
                     </li>
                     <hr>
                  </ul>
               </div>
               <div class="title-module">
                  <h3>Sửa Thông Tin Bài Viết</h3>
                  <br>
                  <form name="edit_course" method="post">
                     
                         <table class="list-course" bgcolor="#FFFFFF" border="1">
                           <tr class="title">
                              <td width="40">Sửa</td>
                              <td width="40">Xóa</a></td>
                              <td width="100">Tiêu đề</td>
                              <td width="350">Hình ảnh</td>
                              <td width="120">Nội dung</td>
                              <td width="120">Tác giả</td>
                              <td width="120">Ngày đăng bài</td>
                           </tr>
                            <?php 
                              $tieude=$_GET['tieude'];
                              $hinhanh=$_GET['hinhanh'];
                              $noidung=$_GET['noidung'];
                              $tacgia=$_GET['tacgia'];
                              $ngaydangbai=$_GET['ngaydangbai'];
                              $sql = "SELECT * from baiviet where tieude=$tieude";
                              $result = mysqli_query($conn,$sql);
                              echo "<form method='post'>";
                           ?>
                           <tr>
                              <td><a href="sua_user.php"><i class="fa fa-edit"></i></a></td>
                              <td><a href=""><i class="fa fa-trash-alt"></i></a></td>
                              <td><?php echo $row['tieude']; ?></td>
                              <td><?php echo $row['hinhanh']; ?></td>
                              <td class="content"><?php echo $row['noidung']; ?></td>
                              <td><?php echo $row['tacgia']; ?></td>
                              <td><?php echo $row['ngaydangbai']; ?></td>                                   
                           </tr>
                        

                          
                        <input type="submit" value="Lưu" name="edit">
                        <?php echo '</form>'; ?>
                        <?php 
                           if (isset($_POST['edit'])) {
                              $tieude=$_POST['tieude'];
                              $hinhanh=$_POST['hinhanh'];
                              $noidung=$_POST['noidung'];
                              $tacgia=$_POST['tacgia'];
                              $ngaydangbai=$_POST['ngaydangbai'];
                              $query = "UPDATE baiviet set  tieude = '$tieude', hinhanh = '$hinhanh', noidung = '$noidung', tacgia = '$tacgia', ngaydangbai = '$ngaydangbai'  where tieude = $tieude";
                              mysqli_query($conn,$query) or die(mysqli_error($conn));
                              header("location:user.php");
                           }
                        ?>
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
  	</body>
</html>