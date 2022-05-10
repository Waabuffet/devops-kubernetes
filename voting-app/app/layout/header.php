<?php
    session_start();
    include $path.'/API/functions.php';

    if($_GET['session_check'] == "guest"){ //check if user has session, redirect to vote
        if(isset($_SESSION['user_id'])){
            if($_SESSION['user_id'] != ''){
                header('Location: /vote');
            }
        }
    }else if($_GET['session_check'] == 'auth'){ //check if user has no session, redirect to login
        if(isset($_SESSION['user_id'])){
            if($_SESSION['user_id'] == ''){
                header('Location: /login');
            }
        }else{
            header('Location: /login');
        }
    }
    if(!isset($isLogin)){
        $isLogin = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title><?php echo $_GET['title']; ?></title>
</head>
<body>

<div class="container">
    <div class="card" style="margin-top: 50px;">
        <div class="card-header navbar justify-content-between" style="padding-right: 50px;padding-left: 50px;">
            <div>
                <h2>
                    <?php echo $_GET['title'];?>
                </h2>
            </div>
            <?php 
                if(!$isLogin){
                    echo '
                        <div>
                            <a class="btn btn-secondary" href="/API/logout.php">Sign Out</a>
                        </div>
                    ';
                }
            ?>
        </div>
        <div class="card-body" style="padding-right: 50px;padding-left: 50px;">


<?php
    if(isset($_SESSION['error'])){
        if($_SESSION['error'] != ''){
            showAlert($_SESSION['error']);
            $_SESSION['error'] = '';
        }
    }
?>