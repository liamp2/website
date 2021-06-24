<?php
  
  
    $data = $_POST['data'];
    $emailSubject = "PumpkinHomes Form Submission";
    $emailBody = ""; 
    $decoded = json_decode($data, true);
    foreach($decoded as $key => $value){
        if($key != 'subject'){
            $emailBody = $emailBody . $key. ": " .  $value. "\n";
        } else {
            $emailSubject = $value;
        }
        
    }
    // echo $emailBody;
    //echo $phoneNumber;
    if(mail("liamhockey2@gmail.com", $emailSubject, $emailBody)){
        echo "Success";
    } else{
        echo "erorr";
    }
    
?>