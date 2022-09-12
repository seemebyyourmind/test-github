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
        <td>'.$value['province'].'</td>
        <td>'.$value['habitat'].'</td>
        <td>'.$value['day_infection'].' $</td>
        <td>'.$value['day_heal'].' $</td>
        <td>'.$value['day_death'].' $</td>
   <td><a href="edit.php?id='.$value['patient_id'].'">Edit</a></td>
    <td><a href="delete.php?id='.$value['patient_id'].'"> Delete</a></td>
    </tr>';
}
echo html_entity_decode($html);
    ?>