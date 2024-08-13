<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
include("connection.php")

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <?php
include("nav.php");

?>

<div class="card" style="width: 47rem;height: 30rem;">
  <div class="card-body">
    <h5 class="card-title">store out</h5>
    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
       <th>store Id</th> 
       <th>furniture name</th> 
       <th>price</th>
       <th>phone Number</th>
       <th>date</th>
       <th>number</th>
       <th>action</th>
    </tr>
  </thead>
        <?php

        $query="SELECT* FROM storeout";
        $result= mysqli_query($conn,$query);
        if($result){
            while($row= mysqli_fetch_assoc($result)){
            ?>
          <tbody>
            <tr>
                <td><?php echo $row['storeid']; ?></td>
                <td><?php echo $row['furnitureName']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['phoneNumber']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><a href="updatefurniture.php?a='<?php echo $row['storeid']; ?>'" class="btn btn-success">Update</a>
                    <a href="backend.php?a='<?php echo $row['storeid']; ?>'" class="btn btn-danger">Delete</a></td>
            </tr>
            
            </tbody>
            <?php
            }
        }
    ?>
    </table>

<form action="backend.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="">furnitureName</label>
      <input type="text" class="form-control" name="furnitureName">
      <label for="">price</label>
      <input type="number" class="form-control"  name="price">
      <label for="">phone number</label>
      <input type="number" class="form-control"  name="phoneNumber">
      <label for="">date</label>
      <input type="date" class="form-control"  name="date">
      <Label for="">store</Label>
      <input type="number" class="form-control"  name="number">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="outfurniture">Save out furniture</button>
      </div>
    </div>
  </div>
</div>
  </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
  </body>
  <style>
    #nav{
      position:relative;
      left: 7.7rem;
      top: -1rem;
    }
    .btn-primary{
      position:relative;
      top: 1.5rem;
    }
    .btn-success{
      background-color: blue;
      border-color: blue;
    }
    .btn-success:hover{
      background-color: blue;
      border-color: blue;
    }
    body{
      background:  linear-gradient(blue,black);height:42.5rem;
    }
    .card{
      position: relative;
      left: 13rem;
      top: 1rem;
      border-radius: 15px;
    }
    .card-title{
      position: relative;
      left: 18rem;
      top: -0.5rem;
      font-weight: 600;
      font-size: 23px;
    }
  </style>
</html>





