<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">SHOP</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="store_in.php">store in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="storeout.php">store out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">about</a>
        </li>
      </ul>
      </ul>
      <form class="d-flex" role="search">
      <button type="button" class="btn btn-primary" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Furniture
      </button>
      </form>
    </div>
  </div>
</nav>
<style>
    #btn{
        position: relative;
        top: -0.3vh;
    }
    .nav-link{
      border-radius: 6px;
        color: black;
    }
    .nav-link:hover{
        background-color: blue;
        border-radius: 6px;
        color: white;
    }
    .navbar-brand{
      position: relative;
      font-size: 25px;
      font-weight: 600;
    }
    .navbar-nav{
      position: relative;
      left: 22rem;
    }
</style>