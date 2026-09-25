<?php
include 'db.php';
if(isset($_POST['signup'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  
  // Database me save karo
  $sql = "INSERT INTO users (email, password) VALUES ('$email', '$pass')";
  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Signup Success! Ab Login karo'); window.location='login.php';</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<style>
body{ background:#8cff00; display:flex; justify-content:center; align-items:center; height:100vh; font-family:Arial; margin:0; }
.box{ background:#fff5f7; padding:30px; border-radius:20px; width:350px; }
input{ width:100%; padding:10px; margin:5px 0 15px 0; border:1px solid #ccc; border-radius:5px; box-sizing:border-box; }
button{ width:100%; background:#ffcc00; padding:12px; border:none; border-radius:20px; font-weight:bold; cursor:pointer; font-size:16px; }
a{ color:purple; font-weight:bold; text-decoration:none; }
</style>
</head>
<body>
<div class="box">
<h2>Sign up</h2>
<p>Create account or <a href="login.php">Log in</a></p>
<form method="POST">
<label>Email address</label>
<input type="email" name="email" placeholder="email" required>
<label>Password:</label>
<input type="password" name="password" placeholder="****" required>
<button type="submit" name="signup">Sign up</button>
</form>
</div>
</body>
</html> 