 <?php
include 'db.php';
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass'");
  if(mysqli_num_rows($result) == 1){
    echo "<script>alert('Login Success! Welcome'); window.location='dashboard.php';</script>";
  } else {
    echo "<script>alert('Galat Email ya Password');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head><title>Log in</title>
<style>
body{ background:#8cff00; display:flex; justify-content:center; align-items:center; height:100vh; font-family:Arial; }
.box{ background:#fff5f7; padding:30px; border-radius:20px; width:350px; }
input{ width:100%; padding:10px; margin:5px 0 15px 0; border:1px solid #ccc; border-radius:5px; box-sizing:border-box; }
button{ width:100%; background:#ffcc00; padding:12px; border:none; border-radius:20px; font-weight:bold; cursor:pointer; }
</style>
</head>
<body>
<div class="box">
<h2>Log in</h2>
<form method="POST">
<label>Email address</label>
<input type="email" name="email" required>
<label>password:</label>
<input type="password" name="password" required>
<button type="submit" name="login">Log in</button>
</form>
<p>New? <a href="signup.php">Sign up</a></p>
</div>
</body>
</html>