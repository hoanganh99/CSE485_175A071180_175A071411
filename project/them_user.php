<?php
   ob_start();
   session_start(); 
   
   include'connect.php';
   if(!$_SESSION['name'])
   {
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
                        <a class="menu_main1" href="index.php">
                           <span>Trở về trang chủ</span>
                        </a>
                     </li>
                     <hr>
                  </ul>
               </div>
               <div class="title-module">
                  <h3>Thêm Bài Viết</h3>
                  <form name="edit_course" method="post">
                     <table class="table-form-edit" align="center" bgcolor="#FFFFFF">
                        <tr>
                           <td colspan="2" align="left"><strong>Thêm bài viết:<br><br></strong></td> 
                        </tr>
                        <tr>
                           <td width="180">Tiêu đề:<br><br></td>
                           <td width="300"><input type="text" name="tieude"  size="40"><br><br></td>
                        </tr>
                        <tr>
                           <td>Hình ảnh:<br><br></td>
                           <td><input type="text" name="hinhanh" size="40"><br><br></td>
                        </tr>
                        <tr>
                           <td>Nội dung:<br><br></td>
                           <td><textarea cols="30" rows="5" name="noidung"></textarea><br><br></td>
                        </tr>
                        <tr>
                           <td>tác giả:<br><br></td>
                           <td><input type="text" name="tacgia" size="40"><br><br></td>
                        </tr>                   
                        <tr>
                           <td>Ngày đăng bài:<br><br></td>
                           <td><input type="date" name="ngaydangbai" size="40"><br><br></td>
                        </tr>
                        <tr>
                           <td align="center" ></td>
                           <td>
                              <a href="user.php">
                                 <input type="submit" value="Lưu lại" name="submit">
                              </a>
                              <a href="them_user.php">
                                 <input type="reset" value="Làm mới" name="reset">
                              </a>
                              <br><br>
                           </td>
                        </tr>
                     </table>
                  </form>
                     <?php 
                           if(isset($_POST['submit']))
                           {
                              if(!empty($_POST['tieude']) && !empty($_POST['hinhanh'])&& 
                                 !empty($_POST['noidung'])&& !empty($_POST['tacgia'])&& 
                                 !empty($_POST['ngaydangbai'])
                                 )
                              {
                                 $tieude      = $_POST['tieude'];
                                 $hinhanh     = $_POST['hinhanh'];
                                 $noidung     = $_POST['noidung'];
                                 $tacgia      = $_POST['tacgia'];
                                 $ngaydangbai = $_POST['ngaydangbai'];               
                                                

                                 $sql= mysqli_query($conn,"SELECT * from baiviet where tieude = '$tieude'");
                                 $count = mysqli_num_rows($sql);

                                 if($count==1)
                                 {
                                    echo
                                    "<div style='color: red; font-weight: bolder; text-align: center;'>
                                       Thông tin đã tồn tại !!!
                                    </div>";
                                 }
                                 else if($count==0)
                                 {
                                 // đẩy dl lên db
                                    mysqli_query($conn,"INSERT into baiviet(tieude, hinhanh, noidung, tacgia, ngaydangbai) values('$tieude','$hinhanh','$noidung', '$tacgia', '$ngaydangbai')") or die(mysqli_error($conn));
                                    echo
                                    "<div style='color: red; font-weight: bolder; text-align: center;'> 
                                       Thêm thành công :))
                                    </div>";
                                 }
                              }
                              else 
                              {
                                 echo
                                 "<div style='color: red; font-weight: bolder; text-align: center;'>
                                    Vui lòng nhập đủ thông tin !!!
                                 </div>"; 
                              }
                           }
                        ?>
                        <br>
                     </div>
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
  	</body>
</html>