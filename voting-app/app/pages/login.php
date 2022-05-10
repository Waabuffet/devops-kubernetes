<?php 
$_GET['title'] = 'Login';
$_GET['session_check'] = 'guest';
$path = $_SERVER['DOCUMENT_ROOT'];
$isLogin = true;
include $path.'/layout/header.php'; 
?>

<form action="../API/check.php" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required autofocus>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <small>Don't have an account yet? <a href="/signup">Sign Up</a> or <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>/results">Check voting results</a></small>
</form>

<?php include $path.'/layout/footer.php'; ?>