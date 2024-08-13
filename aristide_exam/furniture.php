<title>furniture</title>

<?php
include("connection.php")

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white;font-weight: 600;">CARGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: white;">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            furniture
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" style="color: blue;">store in</a></li>
            <li><a class="dropdown-item" href="#" style="color: blue;">store out</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">import</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">export</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="">
            Add New Teacher
        </button>

<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
       <th>furniture Id</th> 
       <th>furniture name</th> 
       <th>owner name</th>
       <th>action</th>
    </tr>
  </thead>
        <?php

        $query="SELECT* FROM funiture";
        $result= mysqli_query($conn,$query);
        if($result){
            while($row= mysqli_fetch_assoc($result)){
            ?>
          <tbody>
            <tr>
                <td><?php echo $row['furnitureId']; ?></td>
                <td><?php echo $row['furnitureName']; ?></td>
                <td><?php echo $row['ownerName']; ?></td>
                <td><a href="updateteacher.php?a='<?php echo $row['furnitureid']; ?>'" class="btn btn-success">Update</a>
                    <a href="backend.php?a='<?php echo $row['furnitureid']; ?>'" class="btn btn-danger">Delete</a></td>
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

                        <div class="form-group">
                            <Label>furnitureName</Label>
                            <input type="text" class="form-control" placeholder="Enter the furniture name"
                                name="furniture_name">
                        </div>
                        <div class="form-group">
                            <Label>owner Name</Label>
                            <input type="text" class="form-control" placeholder="Enter the furniture name"
                                name="owner_name">
                        </div>
                        </div>
                        <div class="form-group">
                            <Label>furniture </Label>

                            <select name="funiture" class="form-control">
                                <option selected> Select furniture</option>
                                <option selected> store in</option>
                                <option selected> store out</option>
                                <?php
            $query = "SELECT * FROM funiture";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                        <option value="<?php echo $row['furnitureId']; ?>"><?php echo $row['furnitureName']; ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                             
                            </select>
     

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="newfurniture">Save furniture</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<style>
    .container-fluid{
        background-color: blue;
    }
    .dropdown-menu{
        background-color: black; 
    }
</style>
</body>
</html>