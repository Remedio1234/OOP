<?php
    //call database connection
    include "../../config/Database.php";
    $response   = array(); 
    if($_POST){
        switch ($_POST['_action']) {
            case 'register':
                extract($_POST);
                // $apple = array("a" => 1,"b" => 2);
                // echo $apple["a"];
                // extract($apple);
                // echo $a;
                // $name;
                // $email;
                // $password;
                // $name       = $_POST['name'];
                // $email      = $_POST['email']; 
                // $password   = password_hash($_POST['password'], PASSWORD_DEFAULT); 
                $password   = password_hash($password, PASSWORD_DEFAULT);
                $register   = $dbConn->query("INSERT INTO users (name, email, password) VALUES ('".$name."','".$email."','".$password."')");
                if($register)
                    $response = [
                        'response'  => 'success',
                        'message'   => 'Successfully registered!'
                    ];
            break;
            case 'check_email':
                $email_checker = $dbConn->query("SELECT * FROM users WHERE email = '". $_POST['email']."' ");
                if($email_checker->rowCount() > 0)
                    echo 'false';
                else 
                    echo 'true';
                exit;
            break;
        }
    } else {
        $response = [
            "response"  => 'failed',
            "message"   => 'something went wrong!'
        ];
    }
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    echo json_encode($response);
?>