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
                text-align: center;
            }
            div.form-group{
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                float: right;
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php session_start();
            include('connectdb.php');
            $id = $_GET['id'];
            //Kết nối databse
            $time=$_GET['time'];
            $day=date('d-m-Y', strtotime($time));
            //Viết câu SQL lấy tất cả dữ liệu trong bảng players
            $sql="SELECT * FROM travel_history WHERE patient_id='$id' and time='$time'";
            //Chạy câu SQL
            $result=mysqli_query($connect,$sql);
            //Gắn dữ liệu lấy được vào mảng $data
            while ($row=mysqli_fetch_assoc($result)) {
                $info = $row;
            }
            
            $_SESSION['time']=$info['time'];
            
        ?>
        <form action="editprocesstravel.php" method="POST">
            <h1>Chỉnh sửa thông tin di chuyển</h1>
            <h3>Id:<?php echo $info['patient_id']?></h3>
            <h3>Ngày:<?php echo $day?></h3>
           
            <div class="form-group">
                <input type="text" name="passed_area" value="<?php echo $info['passed_area'] ?>"><span>Khu vực đi qua </span>
            </div>
           
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Làm lại</button>
                 <a href="placetravel.php?id=<?php echo $_SESSION['id_patient'];?>"><button type="button">Hủy</button></a>
            </div>
        </form>
    </body>
</html>


