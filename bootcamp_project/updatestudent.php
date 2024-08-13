<?php
include("connection.php")

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if(isset($_GET['a'])){
    $id = $_GET['a'];
    $query="SELECT * FROM student WHERE studentid=$id";
    $result=mysqli_query($conn,$query);
   $row =mysqli_fetch_assoc($result);
   }
    ?>



            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 teacher 
</button>
<div id="nav">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">department</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="inde.php">teacher</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ind.php">student</a>
  </li>
</ul>
</div>

        <?php

        $query="SELECT* FROM student";
        $result= mysqli_query($conn,$query);
        if($result){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <?php
            }
        }
    ?>

<form action="backend.php" method="post">
      <div class="modal-body">
      <label for="">first name</label>
      <input type="hidden" name="id"value="<?php echo $row['studentid'] ;?>" >
      <input type="text" class="form-control" value="<?php echo $row['first_name'] ;?>" name="first_name">
      <label for="">last name</label>
      <input type="text" class="form-control" value="<?php echo $row['last_name'] ;?>" name="last_name">
      <label for="">email</label>
      <input type="text" class="form-control" value="<?php echo $row['email'] ;?>" name="email">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update_student">Save student</button>
      </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
  </body>
  <style>
    #nav{
      position:relative;
      left: 5.5rem;
      top: -1rem;
    }
  </style>
</html>