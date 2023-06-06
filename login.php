<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
    <div class="html"></div>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
          <div class="front">
            <!--<img src="images/frontImg.jpg" alt="">-->
            <div class="text">
              <span class="text-1">Web Parkiran</span>
              <span class="text-2">Kelompok Sekian</span>
            </div>
          </div>
          <div class="back">
            <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
            <div class="text">
              <span class="text-1">Sudah Mendaftar? <br> Login Saja</span>
              <span class="text-2">Yok Kita Mulai</span>
            </div>
          </div>
        </div>
        <div class="forms">
            <div class="form-content">
              <div class="login-form">
                <div class="title">Login</div>
              <form action="cek_login.php" method="post">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="username" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                  </div>
                  <div class="text"><a href="#">Forgot password?</a></div>
                  <!-- <div class="checkbox">
                    <p><input type="radio" name="pilihan[]" value="admin"> Admin</p>
                    <p><input type="radio" name="pilihan[]" value="user"> User</p>
                  </div> -->
                  <div class="button input-box">
                    <input type="submit" value="Sumbit">
                  </div>
                   <!-- <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
                </div>
            </form>
          </div>
            <div class="signup-form">
              <div class="title">Signup</div>
            <form action="#">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Enter your name" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Enter your password" required>
                  </div>
                  <div class="button input-box">
                    <input type="submit" value="Sumbit">
                  </div>
                  <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                </div>
          </form>  -->
        </div>
        </div>
        </div>
      </div>
    <?php
   if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo"<script>alert('Anda salah memasukkan username atau password');window.location</script>";
    }
   }
   ?>
    
  
</body>
</html>
