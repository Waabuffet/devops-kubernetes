<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'];
require $path.'/database/db.php';
include $path.'/API/functions.php';

if(!isset($_POST['candidate_id'])){
    $_SESSION["error"] = "You must select a candidate";
    header('Location: /vote');
}else{
    if($_POST['candidate_id'] == 0){
        $_SESSION["error"] = "You must select a candidate";
        header('Location: /vote');
    }else{
        $query = "INSERT INTO candidate_votes (user_id, candidate_id) VALUES (:user_id, :candidate_id);";

        Database::getInstance()->insert($query, array(
            ':user_id' => $_SESSION['user_id'],
            ':candidate_id' => $_POST['candidate_id']
        ));

        header('Location: /vote');
    }
}