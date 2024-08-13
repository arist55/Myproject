<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="IMG/logo.PNG" type="image/x-icon"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/design.css">
    <title>shop management</title>

    <?php
include("connection.php")

?>

</head>
<body>
    <div class="won">

        <div class="form-box register">
            <h2>Register</h2>
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
                       <ion-icon name="mail"></ion-icon>   
                    </span>
                    <input type="email" required  name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                       <ion-icon name="key"></ion-icon>     
                    </span>
                    <input type="password" required  name="password">
                    <label>password</label>
                </div>
                <div class="mb-3">
                  <label for="exampleInputrole1" class="form-label">role</label>
                  <select name="role" class="form-control">
                                <option selected> select role</option>
                                <option value="admin"> admin</option>
                                <option value="accountant">accountant</option>
                            
                            </select></div>
                    <button type="submit" class="btn" name="register">Register</button>
                <div class="login-register">
                  <p>Already have an account <a href="login.php" class="login-link">Login</a></p>
                </div>
        </form>
    </div>
</div>

<script src="web.js"></script>
   

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html> 