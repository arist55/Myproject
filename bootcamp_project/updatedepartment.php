<?php
include("connection.php")

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if(isset($_GET['a'])){
    $id = $_GET['a'];
    $query="SELECT * FROM department WHERE departmentid=$id";
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

        $query="SELECT* FROM department ";
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
      <label for="">department id</label>
      <input type="hidden" name="id"value="<?php echo $row['departmentid'] ;?>" >
      <input type="text" class="form-control" value="<?php echo $row['departmentid'] ;?>" name="departmentid">
      <label for="">department name</label>
      <input type="text" class="form-control" value="<?php echo $row['departmentname'] ;?>" name="departmentname">
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="updatedepartment">Save department</button>
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