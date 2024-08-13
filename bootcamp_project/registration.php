<html>

<?php
include("connection.php")

?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>registration</title>
</head>
<body>
<form action="backend.php" method="post">
<div class="mb-3">
    <label for="exampleInputname1" class="form-label">username</label>
    <input type="text" class="form-control" id="exampleInputname" placeholder="name" aria-describedby="nameHelp" name="name">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="password" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputrole1" class="form-label">role</label>
    <select name="role" class="form-control">
                                <option selected> select role</option>
                                <option value="teacher"> teacher</option>
                                <option value="student"> student</option>
                            
                            </select>  </div>
  </div>
  <button type="submit" class="btn btn-primary" name="register">register</button>
  <div id="textHelp" class="form-text"> if you have an account <a href="login.php">login here</a></div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>