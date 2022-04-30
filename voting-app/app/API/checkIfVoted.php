<?php
require $path.'/database/db.php';

$hasVoted = false;

$query = "SELECT * FROM candidate_votes WHERE user_id = :user_id;";

$result = Database::getInstance()->select($query, array(
    ':user_id' => $_SESSION['user_id']
));

if($result->rowCount() > 0){
    $hasVoted = true;
}

?>