<?php
  
  
    $data = $_POST['data'];
    $emailBody = "";
    $decoded = json_decode($data, true);
    foreach($decoded as $key => $value){
        $emailBody = $emailBody . $key. ": " .  $value. "<br>";
    }
    echo $emailBody;
    //echo $phoneNumber;
    // if(mail("liamhockey2@gmail.com","Here is the subject line", "my message")){
    //     echo "Success";
    // } else{
    //     echo "erorr";
    // }
    // }
?>