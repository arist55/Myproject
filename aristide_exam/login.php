<!DOCTYPE html>

<?php
include("connection.php")

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
<form action="backend.php" method="POST">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">login</h5>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="username">
  <label for="floatingInput">username</label>
</div>

<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="password">
  <label for="floatingPassword">Password</label>
  <button type="button" class="btn btn-primary" name="login">login</button>
  <div id="textHelp" class="form-text"> if you have an account <a href="register.php">login here</a></div>

</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  </div>
</div>

</div>

<style>
  .card{
    position: relative;
    left: 30rem;
    top: 10rem;
  }

  .card-title{
    position: relative;
    left: 4rem;
  }
</style>