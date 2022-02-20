<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">  
    <title>Contact Us | Poultry Farming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<script>
function phonenumber()
{
  let x=document.getElementById('inputMobile');
  var phoneno = /^\d{10}$/;
  if(x.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("this is not valid phone no.");
        return false;
        }
}
</script>
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
                <a class="nav-link "  href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="Education.php">Education</a>
              </li><li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contact us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="breadcrum">
        <h1 class="p-5 text-white">Contact Us</h1>
        <h6 class="text-yellow ps-5"><strong><a class="text-yellow" href="index.php">Home</a> » Contact Us </strong> </h6>
    </div>
    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" method="post" action="querycontroller.php">
            <div class="col-md-6">
              <label for="fname" class="form-label"> First Name</label>
              <input type="text" name="ct_fname" class="form-control" placeholder="First Name"  required>
            </div>
            <div class="col-md-6">
                <label for="fname" class="form-label"> Last Name</label>
                <input type="text" name="ct_lname" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="ct_email" placeholder="Enter Email" required>
            </div>
            <div class="col-12">
              <label for="inputmobile" class="form-label">Mobile No.</label>
              <input type="tel" class="form-control" onchange="phonenumber()" id="inputMobile" name="ct_mobile" placeholder="9876543210" required>
            </div>
            <div class="col-md-12 form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="ct_comment" required></textarea>
                <label for="floatingTextarea">Comments</label>
              </div>
              
            <div class="col-12">
              <button type="submit" class="btn btn-outline-dark" name="contact">Send</button>
            </div>
          </form>
    </div>


    
          <?php include_once('footer.php'); ?>

