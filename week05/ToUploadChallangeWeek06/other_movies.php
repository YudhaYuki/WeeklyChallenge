

<?php
//database connection
$host = 'localhost';
$user = 'root';
$pass = 'xxxx';
$db = 'movie';


/* 1) mysqli and mysqli result objects */

//$mysqli is object of mysqli class
$mysqli = new mysqli($host,$user,$pass,$db); 
//print_r($mysqli);die;

//call query method of $mysqli object
$result = $mysqli->query 
        //SELECT queries are always return as mysqli result objects
        ("SELECT * FROM imdb_movie WHERE year BETWEEN 2000 AND 2017 ORDER BY rand() LIMIT 20") 
        or die($mysqli->error); 

//$result is an object
/* whenever we have an object variable, it means we can call methods on it
 * and the objects can also have properties
 */

?> 

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Document</title>

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
          <a class="nav-link navbar-font-color" href="index.php">Home <span class="#"></span></a>
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


  <div class='main-container'> <?php

/* 2) getting data from mysqli result object */

//call fetch_assoc() method of $result object
//keep getting row's column data as associative array until NULL (no rows is returned)
//fetch_assoc() will automatically keep fetching next row when called again
//print_r($result->fetch_assoc());
//print_r($result->fetch_assoc()); die;

//this is why we can put it directly in the loop and keep getting new rows until the end
while ($movie = $result->fetch_assoc()): ?> 
        <div class='movie-container'>
            <div class='header'>
            <h1><?= $movie['name'] ?></h1>
            <span class='year'>( <?= $movie['year'] ?> )</span>
            </div>
            <div class='content'>
            <div class='left-column'>
            <!-- Image width and height multiplied by 1.3 (to make them a bit bigger) -->
            <img width='<?php 67*1.3 ?>' height='<?= 98*1.3 ?>' src='<?= $movie['image_url'] ?>'>
            <div id='ratings'>
            <!-- If imdb_rating for the movie exists, print it, otherwise don't, same for metascore -->       
            <div class='imdb'><?= $movie['rating'] ? $movie['rating'] : '' ?></div>
            <div class='metascore'><?= $movie['metascore'] ? $movie['metascore'] : '' ?></div>
            </div>
            </div>
            <div class='right-column'>
                


            <span class='content blue'>
            <?= $movie['length'] .' min'; ?>
            </span>

            <?php
            //genres
            $result2 = $mysqli->query
                    ("SELECT imdb_genre_id FROM imdb_movie_has_genre WHERE imdb_movie_id={$movie['imdb_id']}") or
            die($mysqli->error);

            //fetch_all returns multi-dimensional array
            $genres = $result2->fetch_all();

            //array_column introduced in PHP 5.6, convert multi-dimensional array to single
            //clean it up
            $genres = array_column($genres, 0); //removes 0 array key

            //print_r($genres);die;

            //loop through genres id's and get the records from genres table
            for ($i = 0; $i < count($genres);$i++)
            {
            $genre = $mysqli->query("SELECT name from imdb_genre where id = '{$genres[$i]}'")->fetch_assoc();
            //print_r($genre);die; //single genre lives here
            
            //print pipe before every first genre
            echo $i == 0 ? ' | ' : ''; 
            echo "<span class='content blue'>".$genre['name']."</span>";
            echo $genres[$i] != end($genres) ? ', ' : ''; //if NOT at the end of genres, print comma
            }

            ?>


<?php
        //     //genres
        //     $result3 = $mysqli->query
        //             ("SELECT id FROM imdb_movie_type WHERE parent_type_id={$movie['imdb_movie_type_id']}") or
        //     die($mysqli->error);

        //     //fetch_all returns multi-dimensional array
        //     $movie_types = $result3->fetch_all();

        //     //array_column introduced in PHP 5.6, convert multi-dimensional array to single
        //     //clean it up
        //     $movie_types = array_column($movie_types, 0); //removes 0 array key

        //     //print_r($genres);die;

        //     //loop through genres id's and get the records from genres table
        //     for ($i = 0; $i < count($movie_types);$i++)
        //     {
        //     $movie_type = $mysqli->query("SELECT name from imdb_movie_type where id = '{$movie_types[$i]}'")->fetch_assoc();
        //     //print_r($genre);die; //single genre lives here
            
        //     //print pipe before every first genre
        //     echo $i == 0 ? ' | ' : ''; 
        //     echo "<span class='content blue'>".$movie_type['name']."</span>";
        //     echo $movie_types[$i] != end($movie_types) ? ', ' : ''; //if NOT at the end of genres, print comma
        //     }

            ?>

            <div class='content budget'><?= $movie['budget'] ?></div>

            

            <div class='bottom'>
            <?php 

            //check if votes exists
            if ($movie['votes_nr']) {
                echo "<span class='content yellow'>Votes: </span>".number_format($movie['votes_nr']);
                //if gross exists print pipe after votes
                //we already know votes exists with if statement above
                echo $movie['gross'] ? ' | ' : '';
            }
            ?>


            </div>
                
            </div>
            </div>
        </div>
</div>
<?php endwhile; ?>
        
</body>
</html>

