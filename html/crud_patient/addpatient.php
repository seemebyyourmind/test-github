<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            button{
                margin-right: 20px;
                padding: 5px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: left;
            }
            div.form-group{
                width: 100%;
                
              
            }
            div.form-group input{
                float: right;
                height: 30px;
                width: 100%;
                margin-bottom: 30px;
            }
            label{
             font: 18px bold;
             font-weight: bold;
             height:20px;
                 
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
      	

        <form action="addprocess1.php" method="POST">
            <h1>Thêm bệnh nhân</h1>
            <hr>
            
            <div class="form-group">
                <label>Tên bệnh nhân</label>
                <input type="text" name="patient_name">
                <br>
            </div>
            <div class="form-group">
                <label>Căn cước công dân</label>
                <input type="text" name="patient_citizen_card">
                
            </div>
            <div class="form-group">
                <label>Địa chỉ </label>
                <input type="text" name="habitat">
            </div>
            
           <label>Tỉnh</label>
        <select id="cars" name="province" >
        <option   value="An Giang"> An Giang</option>
	<option  value="Bà rịa – Vũng tàu">Bà rịa – Vũng tàu</option>   
	<option  value="Bắc Giang">   Bắc Giang</option>
	<option value="Bắc Kạn">	Bắc Kạn</option> 
        <option  value="Bạc Liêu">	Bạc Liêu</option>
	<option value="Bắc Ninh">   Bắc Ninh</option>
	<option  value="Bến Tre">   Bến Tre</option>
	<option value="Bình Định">   Bình Định</option>
	<option  value="Bình Dương">   Bình Dương</option>
	<option  value="Bình Phước">   Bình Phước</option>
	<option  value="Bình Thuận">	   Bình Thuận</option>	
        <option  value="Cà Mau">   Cà Mau</option>
	<option  value="Cần Thơ">   Cần Thơ</option>
	<option  value="Cao Bằng">    Cao Bằng</option> 
	<option  value="Đà Nẵng">   Đà Nẵng</option>
	<option value="Đắk Lắk">   Đắk Lắk</option>
	<option  value="Đắk Nông">   Đắk Nông</option>
	<option  value="Điện Biên">   Điện Biên</option>
	<option  value="Đồng Nai">   Đồng Nai</option>
	<option  value="Đồng Tháp">   Đồng Tháp</option>
	<option  value="Gia Lai">   Gia Lai</option>
	<option  value="Hà Giang">   Hà Giang</option>
	<option  value="Hà Nam">   Hà Nam</option>
	<option  value="Hà Nội">    Hà Nội</option> 
	<option value="Hà Tĩnh">   Hà Tĩnh</option>
	<option  value="Hải Dương">   Hải Dương</option>
	<option  value="Hải Phòng">   Hải Phòng</option>
	<option  value="Hậu Giang">   Hậu Giang</option>
	<option  value="Hòa Bình">   Hòa Bình</option>
	<option  value="Hưng Yên">   Hưng Yên</option>
	<option  value="Khánh Hòa">   Khánh Hòa</option>
	<option  value="Kiên Giang">   Kiên Giang</option>
	<option  value="Kon Tum">   Kon Tum</option>
	<option value="Lai Châu">   Lai Châu</option>
	<option value="Lâm Đồng">   Lâm Đồng</option>
	<option  value="Lạng Sơn">   Lạng Sơn</option>
	<option  value="Lào Cai">   Lào Cai</option>
	<option  value="Long An">   Long An</option>
	<option value="Nam Định">   Nam Định</option>
	<option  value="Nghệ An">   Nghệ An</option>
	<option  value="Ninh Bình">   Ninh Bình</option>
	<option  value="Ninh Thuận">   Ninh Thuận</option>
	<option  value="Phú Thọ">   Phú Thọ</option>
	<option  value="Phú Yên">   Phú Yên</option>
	<option  value="Quảng Bình">   Quảng Bình</option>
	<option  value="Quảng Nam">   Quảng Nam</option>
	<option value="Quảng Ngãi">   Quảng Ngãi</option>
	<option  value="Quảng Ninh">   Quảng Ninh</option>
	<option  value="Quảng Trị">   Quảng Trị</option>
	<option value="Sóc Trăng">   Sóc Trăng</option>
	<option  value="Sơn La">   Sơn La</option>
	<option  value="Tây Ninh">   Tây Ninh</option>
	<option value="Thái Bình">   Thái Bình</option>
	<option value="Thái Nguyên">   Thái Nguyên</option>
	<option  value="Thanh Hóa">   Thanh Hóa</option>
	<option  value="Thừa Thiên Huế">    ThừaThiên Huế</option> 
	<option  value="Tiền Giang">   Tiền Giang</option>
	<option  value="Thành phố Hồ Chí Minh"> Thành phố Hồ Chí Minh</option>   
	<option value="Trà Vinh">   Trà Vinh</option>
	<option  value="Tuyên Quang">   Tuyên Quang</option>
	<option value="Vĩnh Long">   Vĩnh Long</option>
	<option  value="Vĩnh Phúc">   Vĩnh Phúc</option>
	<option  value="Yên Bái">   Yên Bái</option>
</select>
            
           <div class="form-group">
                <label>Ngày nhiễm bệnh</label>
                <input type="date" name="day_infection">
            </div>
            <div class="form-group">
                <label>Ngày tử vong</label>
                <input type="date" name="day_health">
            </div>
            <div class="form-group">
                <label>Ngày chết</label>
                <input type="date" name="day_death">
            </div>
            
            
            <div class="form-group">
                <button type="submit">Thêm</button>
                <button type="reset">Nhập lại</button>
                <a href="crudpatient.php"><button type="button">Hủy</button></a>
                
            </div>
        </form>
    </body>
</html>