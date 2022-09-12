
<?php
    include('connectdb.php');
    $id = $_GET['id'];
  
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql1 = "DELETE FROM patient WHERE patient_id='$id'";
    $sql2 = "DELETE FROM travel_history WHERE patient_id='$id'";
    // Chạy câu SQL
    $result1 = mysqli_query($connect,$sql2);
    $result2 = mysqli_query($connect,$sql1);
    header("Location: crudpatient.php");
//    if ($result = mysqli_query($connect,$sql)) {
//        echo "<h1>Xóa cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
//    }else{
//        echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
//    }
?>


