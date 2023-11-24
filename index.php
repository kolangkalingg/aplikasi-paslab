<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="registrasi.php" id="registerForm">
      <h2><i class="fas fa-lock"></i> Register</h2>
      <input type="text" placeholder="Username *" name="reg_username" id="regUsername" required/>
      <input type="password" placeholder="Password *" name="reg_password" id="regPassword" required/>
      <button type="submit" class="btn btn-primary mt-3" onclick="showAlert()">Register</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="actionLogin.php" id="loginForm" >
      <h2><i class="fas fa-lock"></i> Login</h2>
      <input type="text" placeholder="Username"   name="username"    required />
      <input type="password" placeholder="Password" name="password"  required/>
<button type="submit" class="btn btn-primary mt-3"><i class="bi bi-box-arrow-in-right"></i> Login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>
