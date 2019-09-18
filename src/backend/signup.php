<?php

    // include_once('./error.php');
    
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $jsonFile = "./data.json"; // JSON File
    $arrayData = array(); //create empty array

    if (isset($_POST['submit'])) {
        try {
            // Get Submited data from the from.
            $formData = array(
                'fullname' => $name,
                'email' => $email,
                'password' => $password
            );

            // Get data from existing json file
            $jsonData = file_get_contents($jsonFile);

            // Convert json data into array
            $arrayData = json_decode($jsonData, true);

            // Push user data to array

            if ($name == null || $email == null || $password = null) {
                echo "Empty Field not allowed";
            } else {
                array_push($arrayData, $formData);

                // Convert updated array to JSON
                $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

                // Write on data.json file
                if (file_put_contents($jsonFile, $jsonData)) {
                    echo 'Welcome ', $_POST['name'];
                } else {
                    echo "error";
                }
            }
           
        } catch (Exception $e) {
            echo 'Exception Caught : ', $e->getMessage(), "\n";
        }
    }

?>