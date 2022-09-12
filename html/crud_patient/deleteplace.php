

<?php
    include('connectdb.php');
    $id = $_GET['id'];
    $time=$_GET['time'];
  
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "DELETE FROM travel_history WHERE patient_id='$id'and time='$time' ";
    // Chạy câu SQL
    $result = mysqli_query($connect,$sql);
   
    header("Location: placetravel.php?id=$id");
//    if ($result = mysqli_query($connect,$sql)) {
//        echo "<h1>Xóa cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
//    }else{
//        echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
//    }
?>
