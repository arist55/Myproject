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

  <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
       <th>teacher Id</th> 
       <th>first name</th> 
       <th>last name</th>
       <th>email</th>
       <th>phone number</th>
       <th>department</th>
       <th>action</th>
    </tr>
  </thead>
        <?php

        $query="SELECT* FROM teacher";
        $result= mysqli_query($conn,$query);
        if($result){
            while($row= mysqli_fetch_assoc($result)){
            ?>
          <tbody>
            <tr>
                <td><?php echo $row['teacherid']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><a href="updateteacher.php?a='<?php echo $row['teacherid']; ?>'" class="btn btn-success">Update</a>
                    <a href="backend.php?a='<?php echo $row['teacherid']; ?>'" class="btn btn-danger">Delete</a></td>
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
      <label for="">first name</label>
      <input type="text" class="form-control" name="first_name">
      <label for="">last name</label>
      <input type="text" class="form-control"  name="last_name">
      <label for="">email</label>
      <input type="text" class="form-control"  name="email">
      <label for="">phone number</label>
      <input type="text" class="form-control"  name="phone">
      <label for="">department</label>
      <input type="text" class="form-control" name="department">
      <!-- <div class="form-group">
                            <Label>Department </Label>

                            <select name="department" class="form-control">
                                <option selected> Select Department</option>

                                <?php
            $query = "SELECT * FROM Department";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                        <option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                             
                            </select> -->


                        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="newTeacher">Save teacher</button>
      </div>
    </div>
  </div>
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
