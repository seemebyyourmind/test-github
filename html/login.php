

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png">
	<title>Đăng Nhập </title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<div class="left">
		<img src="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png" alt="" class="left-image">
		<h3 class="left-title">PC-COVID</h3>
		<p class="left-head">CỔNG THÔNG TIN CỦA BỘ Y TẾ VỀ COVID-19</p>
	</div>
	<form action='logincheck.php' class="right"  method='POST'>
		<h3   class="right-head">Đăng Nhập </h3>
                <input type='text' name='username' placeholder="Email hoặc số điên thoại" class="right-input1" />
		<input type='password' name='password' placeholder="Mật khẩu" class="right-input2"/>
                <button type='submit'  class="right-button1" name="login" value="đăng nhập" >Đăng Nhập</button>
        

		</form>
</body>
</html>