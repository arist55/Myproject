<!DOCTYPE html>
<html lang="en">
<head>

<?php
include("connection.php");

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="shortcut icon" href="IMG/logo.PNG" type="image/x-icon"> -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
include("nav.php");

?>
<center><h2 class="introduction">website of</h2>
<h1 class="introduction">SHOP MANAGEMENT SYSTEM</h1>
<p class="pragraph">this system come to solve problem that retail businesses <br>
   have which is to store data or information of their shops <br>
   and accountant store imported and exported product <br>
   that has sold. </p>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <style>
            body{
                background:  linear-gradient(blue,black);height:42.5rem;
            }
            .introduction{
                position: relative;
                top: 15rem;
                color: white;
            }
            .pragraph{
                position: relative;
                top: 15rem;
                color: grey;
            }
        </style>
</body>
</html>