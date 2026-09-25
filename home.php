<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
<title>Home Page</title>
<style>
body{font-family: Arial; background: #f0f2f5; text-align: center; padding-top: 100px;}
.box{background: white; display: inline-block; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px gray;}
a{padding: 10px 20px; background: red; color: white; text-decoration: none; border-radius: 5px;}
</style>
</head>
<body>
<div class="box">
<h1>Welcome, <?php echo $_SESSION['user']; ?> 🎉</h1>
<p>Login Successful!</p>
<br>
<a href="logout.php">Logout</a>
</div>
</body>
</html>