<?php
    //call database connection
    include "../../config/Database.php";
    $response   = array(); 
    if($_POST){
        // extract($_POST); //$_POST['email']
        $query   = $dbConn->query("SELECT * FROM `users` WHERE `email` = '".$_POST['email']."'");
        $row     = $query->fetch(PDO::FETCH_OBJ); //PDO::FETCH_OBJ // PDO::FETCH_ARRAY
        // -> object $row->password
        // [] - array $row['password'])
        if ($query->rowCount() > 0 && password_verify($_POST['password'],$row->password)) {
            if($row->status == "active") { //check status if active or inactive / banned (column status)
                $_SESSION['user'] = [
                    'id'            => $row->id,
                    'name'          => $row->name,
                    "isLoggedIn"    => true
                ];
                $response = [
                    'response'  => 'success',
                    'message'   => 'successfully logged in.',
                    'user'      => $_SESSION['user']
                ];
            } else {
                $response = [
                    'response' => 'failed',
                    'message' => 'Sorry! your account is temporarily ' . ucfirst($row->status)
                ];
            }
            
        } else {
            $response = [
                'response' => 'failed',
                'message' => 'Wrong email or password.'
            ];
        }
        echo json_encode($response);
    }
?>