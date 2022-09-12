
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
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
    </head>
    <body>
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý bệnh nhân</h1>
            <thead>
                <tr role="row">
                    <th >Mã số </th>
                    <th >Tên bệnh nhân</th>
                    <th  >Số căn cước công dân </th>
                    <th>Địa chỉ  </th>
                    <th>Khu vực </th>
                    <th>Ngày nhiễm bệnh </th>
                    <th>Ngày khỏi bệnh </th>
                    <th>Ngày tử vong</th> 
                    <th style="width: 10%;"> Lịch trình di chuyển</th>
                    <th style="width: 5%;">Sửa</th>
                    <th style="width: 5%;">Xóa</th>
                    
                </tr>
            </thead>
            <tbody>

                    <?php 
    //Kết nối databse
    include('connectdb.php');
    $sql="SELECT * FROM patient";
    //Chạy câu SQL
    $result=mysqli_query($connect,$sql);
    //Gắn dữ liệu lấy được vào mảng $data
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $html = '';
foreach ($data as $value) {
   
$html .= '
    <tr role="row">
        
        <td>'.$value['patient_id'].'</td>
        <td>'.$value['patient_name'].'</td>
        <td>'.$value['patient_citizen_card'].'</td>
        <td>'.$value['habitat'].'</td>
        <td>'.$value['province'].'</td>
        <td>'.$value['day_infection'].'</td>
        <td>'.$value['day_heal'].' </td>
        <td>'.$value['day_death'].' </td>
            <td><a href="placetravel.php?id='.$value['patient_id'].'"> Xem </a></td>
   <td><a href="edit.php?id='.$value['patient_id'].'">Sửa</a></td>
    <td><a href="delete.php?id='.$value['patient_id'].'"> Xóa</a></td>
        
    </tr>';
}
echo $html;
    
  mysqli_close($connect);?>
                   
      
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="11">
                        <a href="addpatient.php"><button id="button">Thêm bệnh nhân</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>

