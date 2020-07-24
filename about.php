<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- My JAvascript -->
    
    <title>Covid-19 Tracker</title>
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light sticky-top navbar-expand-lg">
<a class="navbar-brand" href="#">
    <img src="yt.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    YTeck   
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  
  <ul class="nav justify-content-center nav-tabs mr-auto mt-2 mt-lg-0">
  <li class="nav-item">
    <a class="nav-link " href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="what_is_covid.php">What is Covid-19?</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="prevention.php">Prevention</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="about.php" >About</a>
  </li>
</ul>
  </div>
</nav>
    <div class="container-fluid bg-light p-3 text-center ">
        <h1 class="">Covid-19 Tracker</h1>
        
    </div>

    <div class="container my-2">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deaths</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>

    <div class="container bg-light p-2 my-2 text-center">
        
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>
    <div class="container bg-light p-2 my-2 text-center">
        
        <p class="text-bold">About</p>
    </div>
    <div class="container bg-light p-2 my-2 text-center">
        
        <p class="text-bold"><b>YTeck</b> is an open-source project. It acts as a portal for the public to keep track of the latest news development about the COVID-19, alongside collecting data for further analysis. All the contents are handpicked, filtered, and curated to our best extent to ensure that sources are reliable with minimal hoaxes and fake news, in the best benefit of the public. 

This is a 100% open source project, all information and publishable data are available on Github as well. Everyone is welcomed to contribute.

We aim to use technology and make information more accessible, gather talented people all around the world to win the fight!</p>
    </div>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Developed by Yash</span>
            <p>Follow me on:</p><a href="https://www.instagram.com/ytrivedi13007/" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;<a href="https://github.com/YashT1304" target="_blank"><i class="fab fa-github"></i></a>&nbsp;&nbsp;<a href="https://www.linkedin.com/in/yash-trivedi-919ab1193/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020</span>
        </div>
    </footer>
    <script>
    

