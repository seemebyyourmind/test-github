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
      	

        <form action="addprocesstravel.php" method="POST">
            <h1>Thêm lịch trình</h1>
            <hr>
            
            
            <div class="form-group">
                <label>Ngày </label>
                <input type="date" name="time">
            </div>
            <div class="form-group">
                <label>Khu vực đi qua </label>
                <input type="text" name="passed_area">
            </div>
            
            
            <div class="form-group">
                <button type="submit">Thêm</button>
                <button type="reset">Nhập lại</button>
                <a href="placetravel.php?id=<?php session_start();echo $_SESSION['id_patient'];?>"><button type="button">Hủy</button></a>
                
            </div>
        </form>
    </body>
</html>

