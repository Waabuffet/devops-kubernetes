<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];
require $path.'/database/db.php';
include $path.'/API/functions.php';

if(!isset($_POST['username']) || !isset($_POST['password'])){
    // echo returnJSON(200, 'Username and password required');
    $_SESSION["error"] = "Username and password required";
    header('Location: /pages/login.php');
}else{
    if(!isnotempty([$_POST['username'], $_POST['password']])){
        $_SESSION["error"] = "Username and password cannot be empty";
        header('Location: /pages/login.php');
    }else{
        
        $query = "SELECT id, password FROM users WHERE username = :username;";

        $result = Database::getInstance()->select($query, array(
            ':username' => $_POST['username']
        ));

        if($result->rowCount() == 0){
            $_SESSION["error"] = "Username does not exist";
            header('Location: /pages/login.php');
        }else{
            $row = $result->fetch();
            if(!password_verify($_POST['password'], $row['password'])){
                $_SESSION["error"] = "Wrong password";
                header('Location: /pages/login.php');
            }else{
                $_SESSION["user_id"] = $row['id'];
                header('Location: /pages/vote.php');
            }
        }

    }
}




