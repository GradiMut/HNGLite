<?php
     $email = $_POST['mmail'] ;
     $password = $_POST['pass'];
     $json = file_get_contents("data.json"); // get content of json
     $jsonArray = json_decode($json, true); // convert json to array

     if (isset($_POST['log'])) {

        try {
            foreach ($jsonArray as $key => $user) {
                if ($email == $user['email'] && $password == $user['password']) {
                    echo "Welcom ";
                    echo $user['fullnaame'];
                } else {
                    echo "Error";
                }
                
            }
        } catch(Exception $e) {
            echo 'Exception Caught : ', $e->getMessage(), "\n";
        }
     }
    
     // $json = file_get_contents("data.json"); // get content of json
    // // $jsondata = json_decode($userdata, true); // convert to array
     // $jsonIterator = new RecursiveIteratorIterator(
    //     new RecursiveArrayIterator(json_decode($json, TRUE)),
    //     RecursiveIteratorIterator::SELF_FIRST
    // );
    
    // foreach($jsondata as $user => $val) {
    //     if (is_array($val)) {
    //         echo "$user:\n";
    //     } else {
    //         echo "$user => $val\n";
    //     }
    // }
    
    
    // var_dump($jsondata); // show content
 ?>