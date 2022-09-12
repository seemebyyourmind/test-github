<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            table{
                width: 1250px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            h3{
                text-align: center;
                color: blue;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
    </head>
    <body>
        <?php 
    //Kết nối databse
    session_start();
    $_SESSION['id_patient']=$_GET['id'];
    
   $id=$_GET['id'];
    include('connectdb.php');
   
    
   $sql="SELECT * FROM travel_history WHERE patient_id='$id'";
    //Chạy câu SQL
    $result=mysqli_query($connect,$sql);
    //Gắn dữ liệu lấy được vào mảng $data
    if($result){
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $html = '';
foreach ($data as $value) {

$html .= '
    <tr role="row">
        <td>'.$value['patient_id'].'</td>
        <td>'.$value['time'].'</td>
        <td>'.$value['passed_area'].'</td>
        
   <td><a href="edittravel.php?id='.$value['patient_id'].'&time='.$value['time'].'">Sửa</a></td>
    <td><a href="deleteplace.php?id='.$value['patient_id'].'&time='.$value['time'].'"> Xóa</a></td>
        
    </tr>';
    }
    
}
    

    ?>
        <table id="datatable" style="border: 1px solid">
            <h1>Lịch trình di chuyển </h1>
            <h3>Bệnh nhân 
              </h3>
            <thead>
                <tr role="row">
                    <th >Mã số </th>
                    <th >Thời gian</th>
                    <th >Địa điểm đã đi qua </th>
                    
                    
                    <th style="width: 5%;">Sửa</th>
                    <th style="width: 5%;">Xóa</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
                   echo $html;
             ?>
                    
                   
      
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        
                      <a href="addplace.php?id=<?php echo $id?>"><button id="button">Thêm lịch trình </button></a>
                        <a href="crudpatient.php"><button type="button">Trở lại</button></a>
                        
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>

