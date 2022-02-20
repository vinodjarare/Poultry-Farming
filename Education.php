<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>Education | Poultry Farming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
<style>
  a{
    text-decoration: none;
    color: black;
  }
  a:hover{
    text-decoration: none;
    color: black;
  }
 
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Poultry Farming</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Education</a>
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
      <div class="breadcrum justify-content-around">
          <div class="col-md-10">          
              <h2 class="text-white p-5">Education</h2>
              <h6 class="text-yellow ps-5"><strong><a class="text-yellow" href="index.php">Home</a> » Education</strong></h6>
          </div>
      </div>
      <div class="container-fluid">

      <section id="anotomy">
        <h1 class="pt-4 ps-5"><a href="https://poultry.extension.org/articles/poultry-anatomy/external-anatomy-of-chickens/">Click here</a> for the Anatomy of the Chicken Learning Resource</h1>
        <img src="images/anotomy.png" class="img-fluid p-5" alt="">
      </section>
      <!-- you may also like -->
      <div class="row justify-content-evenly"> 
        <h1 class="ps-4">You may also like</h1>
        <div class="col-md-3 mt-2">
          <img src="images/resources.jpg" width="285px" alt="">
          <a href="https://www.poultryhub.org/education/resources" class="text-dark"><h5>Resources</h5></a>
        </div>
        <div class="col-md-3 mt-2">
          <img src="images/hen-anotomy.jpeg" alt="">
          <a href="https://www.poultryhub.org/anatomy-and-physiology"><h5>Anatomy And Physiology</h5></a>
        </div>
        <div class="col-md-3 mt-2">
          <img src="images/egg-chicks.jpeg" alt="">
          <a href="https://www.poultryhub.org/anatomy-and-physiology/list-of-common-anatomical-and-physiological-terms"><h5>List of comman and phisiological...</h5></a>
        </div>
        <div class="col-md-3 mt-2">
          <img src="images/thermal.jpeg" alt="">
            <a href="https://www.poultryhub.org/anatomy-and-physiology/body-systems"><h5>Body Systems</h5></a>
        </div>
      </div>
      </div>
      


<?php include_once('footer.php'); ?>