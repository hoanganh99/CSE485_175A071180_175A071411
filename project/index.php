<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Đại học Nguyễn Tất Thành">
    <meta name="keywords" content="NTTU, Đại học Nguyễn Tất Thành">
    <meta name="author" content="Hoàng Ánh, Huyền Trang">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trường Đại Học Nguyễn Tất Thành</title>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Thêm icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--boostrap3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
    <?php
        include "top.php"
    ?>   

        <!--Phần trình diễn hình ảnh-->
        <div class="container-fluid">
            <div class="row-3" style=" margin-top:-5%; padding-left:-15%;">
                <div class="w3-container">
                    <div class="mySlides">
                        <!--Hình ảnh thứ 1-->
                        <img src="images/1.jpg" style="width:100%;">
                        <div class="title">
                            <h3>ĐH Nguyễn Tất Thành nhận hồ sơ xét tuyển học bạ đợt cuối đến ngày 03/09/2019</h3>
                        </div>
                    </div>
                    <!--Phần hình ảnh thứ 2-->
                    <div class="mySlides">
                        <img src="http://ntt.edu.vn/web/upload/images/slider/Chinh-sach-hoc-bong-NTTU_Web-Slider.jpg" style="width:100%">
                        <div class="title">
                            <h3>Chính sách học bổng Trường Đại học Nguyễn Tất Thành năm 2019</h3>
                        </div>
                    </div>
                    <!--Phần hình ảnh thứ 3-->
                    <div class="w3-display-container mySlides">
                        <img src="http://ntt.edu.vn/web/upload/images/slider/Lien-thong-NTTU_Web-Slider.jpg" style="width:100%">
                        <div class="title">
                            <h3>Tuyển sinh liên thông 2019</h3>
                        </div>
                    </div>
                    <!--Phần hình ảnh thứ 4-->
                    <div class="mySlides">
                        <img src="http://ntt.edu.vn/web/upload/images/slider/Thac-sy-2019-NTTU_Web-Slider.jpg" style="width:100%">
                        <div class="title">
                            <h3>Tuyển sinh trình độ Thạc sỹ đợt 1 năm 2019 tại ĐH Nguyễn Tất Thành</h3>
                        </div>
                    </div>
                    <!--Phần hình ảnh thứ 5-->
                    <div class="mySlides">
                        <img src="http://ntt.edu.vn/web/upload/images/slider/Vien%20dao%20tao%20quoc%20te%20NTT%202019_NIIE.jpg" style="width:100%">
                        <div class="title">
                            <h3>Viện đào tạo quốc tế NTT (NIIE) - "Cử nhân quốc tế, Cơ hội toàn cầu"</h3>
                        </div>
                    </div>
                    <!--Phần hình ảnh thứ 6-->
                    <div class="mySlides">
                        <img src="http://ntt.edu.vn/web/upload/images/slider/BANER-FUTSAL-SINH-VIEN-TP-HCM-2019_NTTU.jpg" style="width:100%">
                        <div class="title">
                            <h3>Giải đấu Futsal SV Thành phố Hồ Chí Minh 2019</h3>
                        </div>
                    </div>
                    <!--Phần hình ảnh thứ 7-->
                    <div class="mySlides">
                        <img src="http://ntt.edu.vn/web/upload/images/slider/Tham-van-chuyen-gia-NTTU_Web-Slider.jpg" style="width:100%" />
                        <div class="title">
                            <h3>Lịch phát sóng Chương trình Tham vấn Chuyên gia</h3>
                        </div>
                    </div>
                    <!--Phần chuyển slideshow-->
                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="display: flex; margin-top: -4%;">
                        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)"><i class="fa fa-angle-left"></i></div>
                        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>

                <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);
                    function plusDivs(n) {
                        showDivs(slideIndex += n);
                    }
                    function currentDiv(n) {
                        showDivs(slideIndex = n);
                    }
                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        if (n > x.length) { slideIndex = 1 }
                        if (n < 1) { slideIndex = x.length }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" w3-white", "");
                        }
                        x[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " w3-white";
                    }
                </script>
            </div>
        </div>
    </header>
    <!--Phần nội dung chính-->
    <main>
        <div class="container-fluid">
            <!--Hàng thứ 4-->
            <div class="row-4">
                <div class="col-md-3">
                    <a href="#" style="text-decoration:none; color: black; font-size: 20px;">
                        Tin tức
                        <!--Tạo dòng kẻ ngang-->
                        <hr style="width: 15%; margin: 0; height: 2px; background-color: #f8b103;" />
                    </a>
                    <div class="image-1">
                        <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/1.JPG" style="height: 175px;" alt="Alternate Text" />
                        <div class="content-1">
                            <p>Trường ĐH Nguyễn Tất Thành tổ chức “Vui Tết Trung thu” cho con CB – GV - CNV</p>
                            <p style="font-size: 15px;">NTTU - Hòa chung không khí vui tươi của các bạn thiếu nhi trong cả nước sắp đón một mùa Trung thu mới, được sự hỗ trợ và tạo điều kiện của của lãnh đạo Trường ĐH Nguyễn Tất Thành, Công đoàn nhà trường</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-1">
                        <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201908_TIN/37552646402_26cef66dfb_o.jpg" style="height: 175px; margin-top: 15%;" alt="Alternate Text" />
                        <div class="content-1">
                            <p>Tân sinh viên - Bí quyết để tuổi 20 của bạn trở thành mốc thời gian đáng nhớ nhất</p>
                            <p style="font-size: 15px;">Tuổi 20 là khoảng thời gian “rắc rối” nhất của con người. 20 tuổi, bạn không còn là một đứa trẻ vô âu vô lo, nhưng cũng chẳng phải là một người lớn thực thụ. Người ta nói tuổi 20 “dở dở ương ương”, bạn chẳng biết được</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-1">
                        <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201908_TIN/Web_Post.jpg" style="height: 175px; margin-top: 15%;" alt="Alternate Text" />
                        <div class="content-1">
                            <p>ĐH Nguyễn Tất Thành nhận hồ sơ xét tuyển học bạ đợt cuối đến ngày 03/09/2019</p>
                            <p style="font-size: 15px;">NTTU - Với ưu điểm linh hoạt, thuận tiện và đặc biệt là cho phép thí sinh (TS) chủ động hơn trong quá trình xét tuyển, phương thức xét tuyển bằng học bạ lớp 12 đang dần khẳng định được sức hút của mình.Theo đó,</p>
                            <i class="fa fa-chevron-circle-right">&nbsp<a href="#">Xem thêm</a></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration:none; color: black; font-size: 20px;">
                        Media
                        <!--Tạo dòng kẻ ngang-->
                        <hr style="width: 15%; margin: 0; height: 2px; background-color: #f8b103;" />
                    </a>
                    <div class="video">
                        <iframe width="211" height="140" src="https://www.youtube.com/embed/iZ1EUr2DAMs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="link-video" style="margin-top: 5%;">
                        <ul>
                            <li><i class="fa fa-angle-right"> &nbsp <a href="https://www.youtube.com/watch?v=SwWJkVE6vMg">ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a></i></li>
                            <li style="margin-top: 5%;"><i class="fa fa-angle-right"> &nbsp<a href="https://www.youtube.com/watch?v=txdD9O_bGXA">NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a></i></li>
                            <li style="margin-top: 5%;"><i class="fa fa-angle-right"> &nbsp<a href="https://www.youtube.com/watch?v=gE_RSL0ad6c">NỎ THẦN | TẬP CUỐI: ĐƯỜNG VỀ QUY LẠC</a></i></li>
                        </ul>
                        <i class="fa fa-chevron-circle-right" style="color: #024282; padding-left: 65%;">&nbsp&nbsp<a href="#" style="color: #024282;">Xem thêm</a></i>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <!--Hàng thứ 5-->
        <div class="container-fluid">
            <div class="row-5">
                <div class="container">
                    <div id="carousel-simple" class="carousel multi-item-carousel slide col-md-6 col-md-offset-3" data-ride="carousel" style="background-color: #024282;  margin-left: 0%; margin-right: 2%; height: 350px; width: 100%;">
                        <h1>TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH?</h1>
                        <hr style="width: 4%; height: 1px; background-color: #f0732a;" />
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" style="text-align: center;">
                            <div class="item active" style="padding-top: 5%; width: 95%;">
                                <div class="col-md-4" style="padding-left: 5%">
                                    <a href="#" style="color: white; font-size: 25px;text-decoration: none;">Chuẩn 3 sao QS-Stars (Anh Quốc)</a>
                                    <p style="color: rgba(255, 255, 255, 0.51);">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                                </div>
                            </div>
                            <div class="item" style="padding-top: 5%; width: 95%;">
                                <div class="col-md-4" style="padding-left: 5%;">
                                    <a href="#" style="color: white; font-size: 25px;text-decoration: none;">Đạt chuẩn chất lượng quốc gia</a>
                                    <p style="color: rgba(255, 255, 255, 0.51);">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
                                </div>
                            </div>
                            <div class="item" style="padding-top: 5%; width: 95%;">
                                <div class="col-md-4" style="padding-left: 5%">
                                    <a href="#" style="color: white; font-size: 25px;text-decoration: none;">Đại học hạnh phúc</a>
                                    <p style="color: rgba(255, 255, 255, 0.51);">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                                </div>
                            </div>
                            <div class="item" style="padding-top: 5%; width: 95%;">
                                <div class="col-md-4" style="padding-left: 5%">
                                    <a href="#" style="color: white; font-size: 25px;text-decoration: none;">Top 10 thương hiệu nổi tiếng</a>
                                    <p style="color: rgba(255, 255, 255, 0.51);">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
                                </div>
                            </div>
                            <div class="item " style="padding-top: 5%; width: 95%;">
                                <div class="col-md-4" style="padding-left: 5%">
                                    <a href="#" style="color: white; font-size: 25px;text-decoration: none;">95% sinh viên tốt nghiệp có việc làm</a>
                                    <p style="color: rgba(255, 255, 255, 0.51);">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn cho sinh viên</p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a href="#carousel-simple" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                        <a href="#carousel-simple" role="button" data-slide="next" style="padding-left: 97%;">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <script type="text/javascript">
                    $('.multi-item-carousel .item').each(function () {
                        var next = $(this).next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                        next.children(':first-child').clone().appendTo($(this));
                        if (next.next().length > 0) {
                            next.next().children(':first-child').clone().appendTo($(this));
                        } else {
                            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                        }
                    });
                </script>
            </div>
        </div>

        <!--Tạo dòng gạch ngang-->
        <hr style="margin: 5%; margin-top: 3%;" />

        <!--Hàng thứ 6-->
        <div class="container-fluid">
            <div class="row-6" style="margin-top: -3%;">
                <!--Phần hợp tác quốc tế-->
                <div class="col-md-4" style="margin-left: 5%; width: 30%;">
                    <a href="#" style="color: rgba(0, 0, 0, 0.90); font-size: 20px; text-decoration: none;">Hợp tác quốc tế</a>
                    <hr style="width: 15%; margin: 0; height: 1px; background-color: #f8b103;" />
                    <div class="image-2" style="margin-top: 5%;">
                        <img src="images/2.jpg" style="width: 87%;height: 175px;" alt="Alternate Text" />
                        <div style="margin-top: 5%; width: 90%;">
                            <a href="#" style="text-decoration: none; color: rgba(0, 0, 0, 0.87); font-size: 20px;text-align: justify;">
                                ĐH Nguyễn Tất Thành tham gia Diễn đàn nâng cao chất lượng đào tạo Việt Nam – Lào và Triển lãm giáo dục Việt Nam 2019
                            </a>
                            <p style="margin-top: 5%; color: black; text-align: justify;">
                                NTTU – Từ ngày 26/5 đến 30/05/2019 tại Trường ĐH Quốc gia Lào, Thủ đô Viêng Chăn, Cộng hòa Dân chủ Nhân dân Lào đã diễn ra Diễn đàn nâng cao chất lượng đào tạo Việt Nam – Lào và Triển lãm giáo dục Việt Nam 2019. ĐH Nguyễn Tất Thành là một trong số các trường ĐH tại Việt Nam tham gia diễn
                            </p>
                            <i class="fa fa-chevron-circle-right" style="color: #024282;">&nbsp&nbsp<a href="#" style="color: #024282;">Xem thêm</a></i>
                        </div>
                    </div>
                </div>
                <!--Phần môi trường học tập-->
                <div class="col-md-4" style=" width: 30%; " width="300px" height="208px">
                    <a href="#" style="color: rgba(0, 0, 0, 0.90); font-size: 20px; text-decoration: none;">Môi trường học tập</a>
                    <hr style="width: 15%; margin: 0; height: 1px; background-color: #f8b103;" />
                    <div class="image-2" style="margin-top: 5%;">
                        <img src="images/3.jpg" style="width: 87%;" alt="Alternate Text" />
                        <div style="margin-top: 5%; width: 90%;">
                            <a href="#" style="text-decoration: none; color: rgba(0, 0, 0, 0.87); font-size: 20px;text-align: justify; ">
                                Tân sinh viên - Bí quyết để tuổi 20 của bạn trở thành mốc thời gian đáng nhớ nhất
                            </a>
                            <p style="margin-top: 5%; color: black; text-align: justify;">
                                Tân sinh viên - Bí quyết để tuổi 20 của bạn trở thành mốc thời gian đáng nhớ nhất
                                Tuổi 20 là khoảng thời gian “rắc rối” nhất của con người. 20 tuổi, bạn không còn là một đứa trẻ vô âu vô lo, nhưng cũng chẳng phải là một người lớn thực thụ. Người ta nói tuổi 20 “dở dở ương ương”, bạn chẳng biết được mình nên làm gì và phải làm như thế nào.
                            </p>
                            <i class="fa fa-chevron-circle-right" style="color: #024282;">&nbsp&nbsp<a href="#" style="color: #024282;">Xem thêm</a></i>
                        </div>
                    </div>
                </div>
                <!--Phần sự kiện nổi bật-->
                <div class="col-md-4" style=" width: 30%;">
                    <a href="#" style="color: rgba(0, 0, 0, 0.90); font-size: 20px; text-decoration: none;">
                        Sự kiện nổi bật
                    </a>
                    <hr style="width: 15%; margin: 0; height: 1px; background-color: #f8b103;" />
                    <div>
                        <ul style="list-style: none;">
                            <!--Chương trình đồng hành cùng sức khỏe học đường-->
                            <li style="margin-top: 5%; margin-left:-10%;">
                                <div class="row">
                                    <div class="col-md-1 ">
                                        <p style="width: 100px; height: 100px; background-color: #024282; text-align: center; color: white; font-size: 25px;">
                                            Sep
                                            <br />
                                            <span style="font-size: 35px; font-weight: bolder;">
                                                11
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="margin-left: 20%; width: 70%;">
                                        <a href="#" style="font-size: 17px; color: black; font-weight: bolder; text-decoration: none;">
                                            Chương trình "Đồng hành cùng sức khỏe học đường: Tư vấn, chăm sóc, điều trị các bện về da" năm 2019
                                        </a>
                                        <p style="margin-top:5%;color:#808080;">
                                            <i class="fa fa-clock mr-2" aria-hidden="true">
                                                07:30 <br /><br />
                                                <span style="font-weight: 100;">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM</span>
                                            </i>
                                        </p>
                                        <hr style="width: 30%; margin: 0; height: 2px; background-color: #808080;" />
                                    </div>
                                </div>
                            </li>
                            <!--Chương trình trung thu cho con của GV-CB-CNV trường-->
                            <li>
                                <div class="row" style="margin-top: 10%; margin-left: -15%;">
                                    <div class="col-md-1 ">
                                        <p style="width: 100px; height: 100px; background-color: #024282; text-align: center; color: white; font-size: 25px;">
                                            Sep
                                            <br />
                                            <span style="font-size: 35px; font-weight: bolder;">
                                                07
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="margin-left: 20%; width: 70%;">
                                        <a href="#" style="font-size: 17px; color: black; font-weight: bolder; text-decoration: none;">
                                            Chương trình trung thu cho con của GV - CB - CNV Trường
                                        </a>
                                        <p style="margin-top:5%;color:#808080;">
                                            <i class="fa fa-clock mr-2" aria-hidden="true">
                                                07:45 <br /><br />
                                                <span style="font-weight: 100;">HT A.801, 300A Nguyễn Tất Thành, P. 13, Q. 4</span>
                                            </i>
                                        </p>
                                        <hr style="width: 30%; margin: 0; height: 2px; background-color: #808080;" />
                                    </div>
                                </div>
                            </li>
                            <!--Chương trình ngày hội tốt nghiệp và chinh phục nhà tuyển dụng-->
                            <li>
                                <div class="row" style="margin-top: 10%; margin-left: -15%;">
                                    <div class="col-md-1">
                                        <p style="width: 100px; height: 100px; background-color: #024282; text-align: center; color: white; font-size: 25px;">
                                            Sep
                                            <br />
                                            <span style="font-size: 35px; font-weight: bolder;">
                                                07
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-3" style="margin-left: 20%; width: 70%;">
                                        <a href="#" style="font-size: 17px; color: black; font-weight: bolder; text-decoration: none;">
                                            Chương trình Ngày hội tốt nghiệp và Chinh phục nhà tuyển dung - Khoa Công nghệ sinh học
                                        </a>
                                        <p style="margin-top:5%;color:#808080;">
                                            <i class="fa fa-clock mr-2" aria-hidden="true">
                                                07:45
                                                <span style="font-weight: 100;">Trung tâm CNSH TPHCM</span>
                                            </i>
                                        </p>
                                        <hr style="width: 30%; margin: 0; height: 2px; background-color: #808080;" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <i class="fa fa-chevron-circle-right" style="color: #024282; margin-top: 5%;">&nbsp&nbsp<a href="#" style="color: #024282;">Xem thêm</a></i>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "footer.php"
    ?>
</body>
</html>
