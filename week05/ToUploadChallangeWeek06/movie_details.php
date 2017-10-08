<?php

    error_reporting(E_ALL); 
    ini_set('display_errors', 1);
    $servername = "localhost";
    $username = "root";
    $password = "xxxx";
    $db_name = "movie";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    // Check connection
    if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
    }
    $imdb_id = $_GET['imdb_id'];
    $imdb_id = mysqli_real_escape_string($conn,$imdb_id);
    $query = "SELECT * FROM `imdb_movie` WHERE `imdb_id`='" . $imdb_id . "'";
    $result = mysqli_query($conn,$query);

    $query = "SELECT * FROM `imdb_movie` WHERE `imdb_id`='" . $imdb_id . "'";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light background-color-flexcard-body">
    <!-- font color was navbar-light changed into white-->
    <a class="navbar-brand" href="http://www.imdb.com/"><img src="img/logo.png" width="40" height="40" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link navbar-font-color" href="http://www.imdb.com/">Home <span class="#"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link navbar-font-color" href="http://www.weekly-challenge.test:8080/week05/try05/movie_details.php?imdb_id=1454029">Movie details <span class="index.html"><!-- current page --> </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-font-color" href="#">Person</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-font-color" href="#">Award</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-font-color" href="other_movies.php">More movies</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search movie" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 navbar-font-color" type="submit">Search</button>
      </form>
    </div>
  </nav>

    <!-- Begin container for sliding pictures -->
    <div class="container">
        <div class="row">
            <div class="col container-slidingimage">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/slide_image_04.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slide_image_05.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slide_image_06.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End container for sliding pictures -->

    <br>

    <div class="container">

        <div class="row">

        <div class="col-12">
            <div class="card background-color-flexcard">
                <div class="card-header flexcard-header-fontcolor">
                    Movie details
                </div>
                <div class="card-body background-color-flexcard-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="card-group">
                                    <div class="card">
                                        <div class="card-body background-color-flexcard-body">
                                            <h4 class="card-title"> </h4>
                                                <!-- <h5>It was AMAZING!</h5>
                                                <br> -->
                                                <p class="card-text">
                                                    <?php
                                                    while($row = mysqli_fetch_array($result)) {
                                                        echo 'Movie ID : '.$row['imdb_id'];
                                                        echo '<br>';
                                                        echo 'Movie type : '. $row['imdb_movie_type_id'];
                                                        echo '<br>';
                                                        echo 'Movie status : '.$row['imdb_movie_status_id'];
                                                        echo '<br>';
                                                        echo 'Movie title : '.$row['name'];
                                                        echo '<br>';
                                                        echo 'Length : '.$row['length'];
                                                        echo '<br>';
                                                        echo 'Year : '.$row['year'];
                                                        echo '<br>';
                                                        echo 'Start year : '.$row['start_year'];
                                                        echo '<br>';
                                                        echo 'End year : '.$row['end_year'];
                                                        echo '<br>';
                                                        echo 'Rating : '.$row['rating'];
                                                        echo '<br>';
                                                        echo 'Number of vote : '.$row['votes_nr'];
                                                        echo '<br>';
                                                        echo 'Metascore : '.$row['metascore'];
                                                        echo '<br>';
                                                        echo 'Certification : '.$row['imdb_certification_id'];
                                                        echo '<br>';
                                                        echo 'Budget : '.$row['budget'];
                                                        echo '<br>';
                                                        echo 'Budget currency: '.$row['budget_currency'];
                                                        echo '<br>';
                                                        echo 'Color code : '.$row['color_code'];
                                                        echo '<br>';
                                                    }
                                                    ?>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>

</html>