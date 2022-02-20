<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>Poultry farming | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
   <script>
    function page(){
     location.href='About.php'
    }
    function edu(){
      location.href='Education.php'
    }
    function research(){
      location.href='Contact.php'
    }
   </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Poultry Farming</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Education.php">Education</a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact us</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Website-Banner-2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/header-1.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
      <div class="container-fluid breakpoint">
      <div class="row justify-content-evenly my-3">
        <div class="col-md-3 text-center p-3 box">
         <h1> <i class="bi bi-book"></i></h1>
          <h2>Education</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, architecto? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, ipsam?</p>
          <button onclick="edu()" class="btn btn-lg btn-outline-dark">Learn more</button>
        </div>
        <div class="col-md-3 text-center p-3 box ">
          <h1> <i class="bi bi-people-fill"></i></h1>
          <h2>Research</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eligendi?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, vel?</p>
          <button onclick="research()" class="btn btn-lg btn-outline-dark text-center">Learn more</button>
        </div>
        <div class="col-md-3 text-center p-3 box">
         <h1> <i class="bi bi-heart-pulse"></i></h1>
          <h2>History</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem!</p>
          <button onclick="page()" class="btn btn-lg btn-outline-dark">Learn more</button>
        </div>
      </div>
    </div>
      <!-- news letter -->
    <div class="news-letter w-80 p-5 ">
      <h2 class="text-white text-center">Sign up to the Newsletter
        for the latest news from Poultry Farming</h2>
        <div class="row ">
          
          <div class="col-md-5  ps-5 news-letter-form">
            <form action="querycontroller.php" method="post">
            <input type="text" class="form-control w-40" placeholder="First name" aria-label="First name" name="nl_fname">  
            <input type="text" class="form-control w-40 mt-2" placeholder="Last name" aria-label="Last name" name="nl_lname">
            <input type="email" class="form-control mt-2 w-40" name="nl_email" placeholder="Email" required>
            <button class="btn btn-outline-light mt-2 w-20" name="nl_subscribe">Subscribe</button>
            </form>
          </div>
          
        </div>
    </div>  
<?php include_once('footer.php'); ?>
    