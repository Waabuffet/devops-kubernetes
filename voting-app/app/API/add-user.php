<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];
require $path.'/database/db.php';
include $path.'/API/functions.php';

if(!isset($_POST['username']) || !isset($_POST['password'])){
    $_SESSION["error"] = "Username and password required";
    header('Location: /pages/signup.php');
}else{
    if(!isnotempty([$_POST['username'], $_POST['password']])){
        $_SESSION["error"] = "Username and password cannot be empty";
        header('Location: /pages/signup.php');
    }else{

        $query = "SELECT id FROM users WHERE username = :username";

        $result = Database::getInstance()->select($query, array(
            ':username' => $_POST['username']
        ));

        if($result->rowCount() != 0){
            $_SESSION["error"] = "Username taken";
            header('Location: /pages/signup.php');
        }else{
            $query = "INSERT INTO users (username, password) VALUES (:username, :password)";

            $id = Database::getInstance()->insert($query, array(
                ':username' => $_POST['username'],
                ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
            ));

            $_SESSION["user_id"] = $id;
            header('Location: /pages/vote.php');
        }
        
        

    }
}