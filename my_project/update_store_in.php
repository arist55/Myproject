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
    $storeid = $_GET['a'];
    $query="SELECT * FROM store_in WHERE storeid=$storeid";
    $result=mysqli_query($conn,$query);
   $row =mysqli_fetch_assoc($result);
   }
    ?>

            <!-- Button trigger modal -->

            <?php
include("nav.php")

?>

        <?php

        $query="SELECT* FROM store_in";
        $result= mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
    ?>

<div class="card" style="width: 30rem;height: 33rem;">
  <div class="card-body">
    <h5 class="card-title">update</h5>

    <form action="backend.php" method="POST">
      <div class="modal-body">
      <label for="">furniture name</label>
      <input type="hidden" name="storeid"value="<?php echo $row['storeid']; ?>" >
      <input type="text" class="form-control" value="<?php echo $row['furnitureName']; ?>" name="furnitureName">
      <label for="">price</label>
      <input type="number" class="form-control" value="<?php echo $row['price']; ?>" name="price">
      <label for="">phone number</label>
      <input type="number" class="form-control" value="<?php echo $row['phoneNumber']; ?>" name="phoneNumber">
      <label for="">date</label> 
      <input type="date" class="form-control" value="<?php echo $row['date']; ?>" name="date">
      <Label for="">store</Label>
      <input type="number" class="form-control" value="<?php echo $row['number']; ?>" name="number">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update_store_in">Save furniture</button>
      </div>
  </form>


  </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <style>
          .card{
            position: relative;
            left: 22rem;
            top: 0.5rem;
          }
          .card-body{
            position: relative;
            top: 3rem;
          }
          .btn-primary{
            position: relative;
            top: 2rem;
            left: -8.5rem;
          }
          .btn-secondary{
            position: relative;
            top: 2rem;
            left: -9rem;
          }
          body{
            background:  linear-gradient(blue,black);height:40.5rem;
          }
        </style>
  </body>
</html>
