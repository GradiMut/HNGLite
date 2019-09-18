<?php
    // include_once('error.php');

     $email = $_POST['mail'] ;
     $password = $_POST['pass'];
     $json = file_get_contents("./data.json"); // get content of json
     $jsonArray = json_decode($json, true); // convert json to array

     if (isset($_POST['log'])) {

        try {
            foreach ($jsonArray as $key => $user) {
                if ($email == null || $password == null) {
                    echo "Empty Filed not allowed";
                } else if ($email != $user['email'] || $password != $user['password']) {
                    echo "Email or password do not match";
                } else {
                    echo "Welcome ";
                    echo $user['fullname'];
                }
                
            }
        } catch(Exception $e) {
            echo 'Exception Caught : ', $e->getMessage(), "\n";
        }
     }
 ?>