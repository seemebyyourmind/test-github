<?php
session_start();
    
   $data = $_POST;
    $errors = [];
    
    $day_infection=date('Y-m-d', strtotime($data['day_infection']));
    $day_health=date('Y-m-d', strtotime($data['day_health']));
    $day_death=date('Y-m-d', strtotime($data['day_death']));
   
  
    include('connectdb.php');
 
   //Validate name
    if (!is_string($data['patient_name']) || strlen($data['patient_name']) < 5 
        || strlen($data['patient_name']) > 55) {
         $errors['patient_name'] = $data['patient_name'] . "Dữ liệu không hợp lệ ";
    }
    if (!is_string($data['patient_citizen_card']) || strlen($data['patient_citizen_card']) < 5 
        || strlen($data['patient_citizen_card']) > 55) {
         $errors['patient_citizen_card'] = $data['patient_citizen_card'] . "Dữ liệu không hợp lệ ";
    }
    if (!is_string($data['habitat']) || strlen($data['habitat']) < 5 
        || strlen($data['habitat']) > 55) {
         $errors['habitat'] = $data['habitat'] . "Dữ liệu không hợp lệ ";
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
        $sql = "INSERT INTO `patient` (`patient_id`, `patient_citizen_card`, `patient_name`, `habitat`, `province`, `day_infection`, `day_heal`, `day_death`) VALUES (NULL,'".$data['patient_citizen_card']."','".$data['patient_name']."','".$data['habitat']."','".$data['province']."','".$day_infection."' ,'".$day_health."', '".$day_death."')";
        //Chạy câu SQL
        echo $sql;

        if($result = mysqli_query($connect,$sql)){
            header("Location: crudpatient.php");
           
    }}
            
    
?>