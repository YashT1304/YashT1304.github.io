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
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="yt.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    YTeck
    
  </a>
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

    <div class="container-fluid" >
        <div class="table-responsive">
            <table class="table table-striped" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" >Countries</th>
                        <th class=" text-center" scope="col">Confirmed</th>
                        <th class=" text-center" scope="col">Increased</th>
                        <th class=" text-center" scope="col">Recovered</th>
                        <th class=" text-center" scope="col">Deaths</th>
                    </tr>
                </thead>
                <tbody id="myUL" >
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr >
                            <th scope="row"><?php echo $key?></th>
                            <td class=" text-center" id="TD">
                                <?php echo $value[$days_count]['confirmed'];?></td>
                                <td class=" text-center"><?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?> 
                                <?php if($increase == 0){?> <small> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5z"/>
</svg></small> <?php }?>   
                            </td>
                            <td class=" text-center"><?php echo $value[$days_count]['recovered'];?></td>
                            <td class=" text-center"><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Developed by Yash</span>
            <p>Follow me on:</p><a href="https://www.instagram.com/ytrivedi13007/"><i class="fab fa-instagram"></i></a><a href="https://github.com/YashT1304"><i class="fab fa-github"></i></a>
        </div>
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020</span>
        </div>
    </footer>
    <script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>                             
</body>
</html>
