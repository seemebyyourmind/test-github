<?php
session_start();
echo "Chào mừng ". $_SESSION['stuff_name']." bạn đăng nhập thành công với vai trò  :<br>"
. "Quản lý y tế "
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png">
	<title>Bộ Y tế - Cổng thông tin của Bộ Y Tế</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
	<!-- header!-->
	<div class="header">
		<form class="head" >
			<img src="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png" alt="" class="pictrue">
			<h3 class="title">Cổng Thông Tin Của Bộ Y Tế Về Covid-19</h3>
			<input type="text" class="head-input" placeholder="Nhập từ khóa">
			<a href="#" class="head-search">
				<i class="fas fa-search"></i>
			</a>
                        <a href="http://localhost/project1/html/updatearea.php" class="head-but1">cập nhập theo tỉnh   
			
                        </a>
                        <a href="http://localhost/project1/html/crud_patient/crudpatient.php" class="head-but1">cập nhập người bệnh   
			
                        </a>
			
		</form>
	</div>
</body>