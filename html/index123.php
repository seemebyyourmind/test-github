
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
		<div class="head">
			<img src="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png" alt="" class="pictrue">
			<h3 class="title">Cổng Thông Tin Của Bộ Y Tế Về Covid-19</h3>
			<input type="text" class="head-input" placeholder="Nhập từ khóa">
			<a href="#" class="head-search">
				<i class="fas fa-search"></i>
			</a>
			<button class="head-but1">Đăng Nhập</button>
			<button class="head-but2">Tạo Tài Khoản</button>
		</div>
	</div>
	<!--container!-->
	<div class="container">
		<div class="container-left">
			
		</div>
		<div class="container-content"></div>
	</div>


	<!-- open modal đăng nhập!-->
	<div class="login hide">
		<div class="login-iner">
			<div class="login-left">
				<img src="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png" alt="" class="login-left-image">
				<h3 class="login-left-title">PC-COVID</h3>
		        <p class="login-left-head">CỔNG THÔNG TIN CỦA BỘ Y TẾ VỀ COVID-19</p>
			</div>
			<div class="login-right" action="login1" method="POST">
				<h3 class="login-right-head">Đăng Nhập</h3>
				<input type="text" name="username" placeholder="Email hoặc số điên thoại" class="login-right-input1">
				<input type="password" name="password" placeholder="Mật khẩu" class="login-right-input2">
				<button class="login-right-button">Đăng Nhập</button>
				<a href="#" class="right-link">
			        <h4 class="right-link-head">Quên mật khẩu?</h4>
		        </a>
			</div>
		</div>
	</div>
	<!-- kết thúc modal đăng nhập!-->
	<!-- open modal tạo tài khoản!-->
	<div class="register hide">
		<div class="register-iner">
			<h3 class="register-head">Tạo Tài Khoản</h3>
			<input type="text" placeholder="Họ" class="register-input1">
			<input type="text" placeholder="Tên" class="register-input2">
			<input type="text" placeholder="Email hoặc số điện thoại" class="register-input3">
			<input type="password" placeholder="Mật khẩu" class="register-input4">
			<h4 class="register-head1">Ngày/Tháng/Năm Sinh</h4>
			<select name="" id="day">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<select name="" id="month">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select name="" id="year">
			<option value="2021">2021</option>
			<option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
		</select>
		<h4 class="register-head2">Giới Tính</h4>
		<ul class="register-list">
			<li>
				<input type="radio">Nam
			</li>
			<li>
				<input type="radio">Nữ
			</li>
		</ul>
		<button class="register-but">Đăng Kí</button>
		</div>
	</div>
	<!-- kết thúc modal tạo tài khoản!-->
</body>

</html>
