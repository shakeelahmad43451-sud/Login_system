 <?php
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
body{font-family: Arial; background:#f0f2f5; display:flex; justify-content:center; align-items:center; height:100vh; margin:0;}
.card{background:white; padding:40px; border-radius:12px; box-shadow:0 4px 20px rgba(0,0,0,0.1); text-align:center; width:350px;}
.card h1{font-size:22px; margin-bottom:10px;}
.card p{color:#555; word-break:break-all;}
.btn{display:inline-block; margin-top:20px; padding:10px 25px; background:#ff3b3b; color:white; text-decoration:none; border-radius:5px;}
.btn:hover{background:#d32f2f;}
</style>
</head>
<body>
<div class="card">
<h1>Welcome 🎉</h1>
<p><?php echo $_SESSION['user']; ?></p>
<a class="btn" href="logout.php">Logout</a>
</div>
</body>
</html>
