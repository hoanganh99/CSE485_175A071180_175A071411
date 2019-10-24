
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
		<!-- phần đầu -->
		<?php  
			include"topIndex.php";
		?>
		<!-- phần chính -->
		<?php  
			include("mainIndex.php");
		?>
		<br>
		<!-- phần cuối -->
		<?php  
			include"footerIndex.php";
		?>
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
		 // phần đầu - phần hotline
    	count = 0;
  		wordsArray = ["0902.298.300 - 0906.298.300","0912.298.300  - 0914.298.300"];
    	 setInterval(function () 
    	{
		    count++;
		    $("#hotline-1").slideUp(600, function() 
		    {
		      $(this).text(wordsArray[count % wordsArray.length]).slideDown(200);
		      console.log('wordsArray '+count % wordsArray.length+' count '+count+' length '+wordsArray.length);
		    });
		}, 3000);

    	// phần responsive, ảnh hưởng tới menu1
    	$('.content-responsive').hide();
	    $('#showMenuRes').click(function()
	    {
	    	$('.content-responsive').slideToggle();
    	});
	    $('#showCollapse').click(function()
	    {
	    	$(".collapse-handmade").slideToggle("slow");
	    });
	    $('#showCollapse2').click(function()
	    {
	    	$(".collapse-handmade").slideToggle("slow");
	    });
    	 

	    //phần main - phần tại sao chọn trường nguyễn tất thành
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

		// phần cuối - phần để lại lời nhắn
    	 $('.content_chatbox').hide();
    	 $('.chatbox').click(function()
    	 {
    	 	$('.content_chatbox').show();
    	 	$(this).hide();
    	 });
    	 $('#close').click(function()
    	 {
    	 	$('.content_chatbox').hide();
    	 	$('.chatbox').show();
    	 });
	});
</script>
</html>