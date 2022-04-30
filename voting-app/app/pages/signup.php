<?php 
$_GET['title'] = 'SignUp';
$_GET['session_check'] = '';
$path = $_SERVER['DOCUMENT_ROOT'];
$isLogin = true;
include $path.'/layout/header.php'; ?>

<form action="../API/add-user.php" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required autofocus>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
    <small>Already a member? <a href="login.php">Log In</a></small>
</form>

<?php include $path.'/layout/footer.php'; ?>