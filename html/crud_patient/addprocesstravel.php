<?php
session_start();
    
   $data = $_POST;
    $errors = [];
    
    $time=date('Y-m-d', strtotime($data['time']));
   
  
    include('connectdb.php');
 
   //Validate name
    if (!is_string($data['passed_area']) || strlen($data['passed_area']) < 5 
        || strlen($data['passed_area']) > 55) {
         $errors['passed_area'] = $data['passed_area'] . "Dữ liệu không hợp lệ ";
    }
    //Validate age
  
 
    
  if (count($errors) > 0) {
        $err_str = '<ul>';
        foreach ($errors as $err) {
            $err_str .= '<li>'.$err.'</li>';
        }   
        $err_str .= '</ul>';
        echo  $err_str;
    }else{
        	

        //Viết câu SQL lấy tất cả dữ liệu trong bảng players
        $sql = "INSERT INTO `travel_history` 
                (`patient_id`, `time`,`passed_area`) 
                VALUES ('".$_SESSION['id_patient']."', '".$time."', '".$data['passed_area']."')";
        //Chạy câu SQL

        if($result = mysqli_query($connect,$sql)){
            header("Location: placetravel.php?id=".$_SESSION['id_patient']."");
           
    }}
            
    
?>


