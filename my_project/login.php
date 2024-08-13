<!DOCTYPE html>
<html lang="en">
<head>

<?php
include("connection.php")

?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="IMG/logo.PNG" type="image/x-icon"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/design.css">
    <title>log in</title>
</head>
<body>
    <div class="wonactive">

        <div class="form-box login">
            <h2>log in</h2>
            <form action="backend.php" method="POST">
            <div class="input-box">
                    <span class="icon">
                       <ion-icon name="people"></ion-icon>     
                    </span>
                    <input type="text" required  name="names">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="key"></ion-icon>    
                    </span>
                    <input type="password" required value="" name="password">
                    <label>password</label>
                  </div>
                  <div class="remember-forgot">
                     <label><input type="checkbox">
                    remember me</label>
                    <a href="">forgot password</a>
                  </div>
                  <button type="submit" class="btn" name="login">login</button>
                  <div class="login-register">
                      <p>don't have an account <a href="register.php" class="register-link">Register</a></p>
                  </div>
            </form> 
        </div>
    </div>
   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>