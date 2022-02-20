<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>About | Poultry Farming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                <a class="nav-link "  href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="Education.php">Education</a>
              </li><li class="nav-item">
                <a class="nav-link " href="Contact.php">Contact us</a>
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
        <h1 class="p-5 text-white">About Us</h1>
        <h6 class="text-yellow ps-5"><strong><a class="text-yellow" href="index.php">Home</a> » About Us </strong></h6>
    </div>
    <div class="container-fluid mt-3">
        <div class="row justify-content-evenly">
            <div class="col-md-7">
                <p>Poultry (/ˈpoʊltri'/) are domesticated birds kept by humans for their eggs, their meat or their feathers.[1] These birds are most typically members of the superorder Galloanserae (fowl), especially the order Galliformes (which includes chickens, quails, and turkeys).[2] The term also includes birds that are killed for their meat, such as the young of pigeons (known as squabs) but does not include similar wild birds hunted for sport or food and known as game. The word "poultry" comes from the French/Norman word poule, itself derived from the Latin word pullus, which means small animal</p>
                <p>The recent genomic study involving the four extant Junglefowl species reveal that the domestication of chicken, the most populous poultry species, occurred around 8,000 years ago in Southeast Asia.[4] Although this was believed to have occurred later around 5,400 years ago in Southeast Asia.[5] This may have originally been as a result of people hatching and rearing young birds from eggs collected from the wild, but later involved keeping the birds permanently in captivity. Domesticated chickens may have been used for cockfighting at first[6] and quail kept for their songs, but soon it was realised how useful it was having a captive-bred source of food. Selective breeding for fast growth, egg-laying ability, conformation, plumage and docility took place over the centuries, and modern breeds often look very different from their wild ancestors. Although some birds are still kept in small flocks in extensive systems, most birds available in the market today are reared in intensive commercial enterprises. </p>
            </div>
        <div class="col-md-3">
            <img src="images/Poultry_of_the_world.jpg" class="img-fluid" alt="">
        </div>
        </div>
        <div class="row justify-content-evenly mt-3 mb-2">
            <div class="col-4 text-center">
                <div class="card">
                    <h2>CEO</h2>
                    <img src="images/avatar.jpg" alt="">
                    <div class="descrption">
                            <h4>Thomas Wyane</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                    <div class="card">
                        <h2>CTO</h2>
                        <img src="images/avatar.jpg" alt="">
                        <div class="description">
                            <h4>Tom Lee</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, odio?</p>
                        </div>
                    
                    </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>