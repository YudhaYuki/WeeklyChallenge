<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

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
          <a class="nav-link navbar-font-color" href="index.php">Home <span class="#"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link navbar-font-color" href="http://www.weekly-challenge.test:8080/week05/ToUploadChallangeWeek06/movie_details.php?imdb_id=1454029">Movie details <span class="index.html"><!-- current page --> </span></a>
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


<div class="container">
    <!-- Begin container for sliding pictures -->
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
    <!-- Begin container -->

    <h1>The Help (2011)</h1>

    <div class="row">

        <div class="col-xs-12 col-sm-6 col-lg-4">
            <img id="image_01" src="img/help_movie_poster_01.jpg" alt="The help" style="float: left; width: 363px; height: 520px;">
        </div>


        <div class="col-xs-12 col-sm-12 col-lg-8">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-lg-6">

                    <div class="card background-color-flexcard">
                        <div class="card-header flexcard-header-fontcolor">
                            Movie details
                        </div>
                        <div class="card-body background-color-flexcard-body">

                            <table>
                                <tr>
                                    <td>Duration</td>
                                    <td> : </td>
                                    <td>2h 26min</td>
                                </tr>
                                <tr>
                                    <td>Genre</td>
                                    <td> : </td>
                                    <td>Drama</td>
                                </tr>
                                <tr>
                                    <td>Issued</td>
                                    <td> : </td>
                                    <td>10 August 2011 (USA)</td>
                                </tr>
                                <tr>
                                    <td>Director</td>
                                    <td> : </td>
                                    <td>Tate Taylor</td>
                                </tr>
                                <tr>
                                    <td>Writers</td>
                                    <td> : </td>
                                    <td>Kathryn Stockett (novel)</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div class="card background-color-flexcard">
                        <div class="card-header flexcard-header-fontcolor">
                            Rating
                            <!-- found from this link https://bootsnipp.com/snippets/featured/rating-card -->
                        </div>
                        <div class="card-body background-color-flexcard-body">
                            <div class="row">
                                <div class="col">
                                    <!-- change from original, was "col-xs-12 col-md-6" -->
                                    <div class="well well-sm">
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6 text-center">
                                                <h1 class="rating-num">
                                                    4.6</h1>
                                                <div>
                                                    <span class="glyphicon glyphicon-user"></span>1,050,008 total
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dic card class body -->
                    </div>
                </div>
                <!-- div col for rating -->

            </div>
            <!-- div for row rating and movie details card class body -->
            <br>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">

                    <div class="card background-color-flexcard">
                        <div class="card-header flexcard-header-fontcolor">
                            Plot
                        </div>
                        <div class="card-body background-color-flexcard-body">

                            <p class="card-text ">

                                Set in Mississippi during the 1960s, Skeeter (Stone) is a southern society girl who returns from college determined to become
                                a writer, but turns her friends' lives and a Mississippi town upside down when she decides
                                to interview the black women who have spent their lives taking care of prominent southern
                                families. Aibileen (Davis), Skeeter's best friend's housekeeper, is the first to open up
                                to the dismay of her friends in the tight-knit black community. Despite Skeeter's life-long
                                friendships hanging in the balance, she and Aibileen continue their collaboration and soon
                                more women come forward to tell their stories and as it turns out, they have a lot to say.
                                Along the way, unlikely friendships are forged and a new sisterhood emerges, but not before
                                everyone in town has a thing or two to say,<button type="button"
                                    class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Read more...</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header flexcard-header-fontcolor">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Plot</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                                            </div>
                                            <div class="modal-body background-color-flexcard-body">
                                                <p>In 1963, Aibileen Clark is a "colored" maid in Jackson, Mississippi, and
                                                    in intermittent voice overs she tells her "career" story to the aspiring
                                                    writer Eugenia "Skeeter" Phelan, a recent graduate of Ole Miss and a
                                                    friend of Aibileen's employer and fellow socialite Elizabeth Leefolt.
                                                    Aibileen's best friend is the plain-spoken Minny Jackson, the maid of
                                                    the socialite Leader and controlling Hilly Holbrook. Minny cooks well.</p>

                                                <p>Hilly believes that "coloreds" have different diseases from the whites. A
                                                    tornado comes through town so Hilly wants Minny to go out into the weather
                                                    to use the new bathroom. Minny uses the household bathroom, is fired
                                                    by Hilly and people are told she stole property. Aibileen tells Skeeter
                                                    her stories are worth telling when Minny is fired.</p>

                                                <p>Minny finds a job with Celia, wife of Johnny Foote--Hilly's former beau.
                                                    Celia cannot cook a lick but she can butcher her own chickens. Minny
                                                    comes upon Skeeter's visiting Aibileen and joins in the book project
                                                    effort. Skeeter is advised by her book editor at Harper and Row, Elaine
                                                    Stein, that the stories of two maids are not enough. Potential retribution
                                                    from the maid's employers hinders others from joining the project. Aibileen
                                                    tells Skeeter about the pain she experiences about her son being fatally
                                                    crushed working on the job and his body being dumped at the "colored"
                                                    hospital.</p>

                                                <p>Hilly has Yule May, Minny's replacement, arrested for thievery. More maids
                                                    start with the book project.</p>

                                                <p>Retribution from the employers is on the minds of Skeeter, Aibileen, and
                                                    Minny if the stories are recognized in the book. Minny reveals her "terrible
                                                    awful” that she did to Hilly. Its inclusion in the book would prompt
                                                    Hilly to crusade denial that the book is about Jackson.</p>

                                                <p>Skeeter confronts her mother Charlotte about the leaving of their elderly
                                                    maid Constantine just before Skeeter's return to Jackson. Constantine's
                                                    daughter Rachel arrives at the Phalen home, embarrasses Charlotte while
                                                    she is entertaining the Daughters of America, so Charlotte's attempt
                                                    to save face is to ask maid and daughter to leave the property. Before
                                                    Charlotte could contain the situation, Constantine has died.</p>

                                                <p>The book is published anonymously, and it is a success. Celia lets on that
                                                    she knows about the terrible awful. Hilly attempts to intimidate Skeeter
                                                    through threat of legal proceedings, but she reminds Hilly that "that"
                                                    is in chapter 12. Charlotte lets on that she knows about the terrible
                                                    awful. Charlotte and Skeeter are reconciled when Charlotte tells her
                                                    how proud she is about her courage, the book and the job offer in New
                                                    York City.</p>

                                                <p>Johnny tells Minny that it is not too difficult to know that there has been
                                                    a change at the house, how appreciative he is about her friendship with
                                                    Celia, how it saved her life, and that she has job security. This act
                                                    gives Minny the courage to take her children away from her abusive husband.</p>

                                                <p>In an attempt to seek revenge for helping Skeeter, Hilly pressures Elizabeth
                                                    to terminate Aibileen, with Hilly present and charging Aibileen with
                                                    theft and imprisonment. But Aibileen stands up to Hilly, reminding her
                                                    that she knows about the terrible awful and that the success of the book
                                                    shows that she has writing skills, that there is much time in prison
                                                    to write, and that paper is free.She dismisses Hilly as a godless woman
                                                    who will never know peace or happiness, causing a humiliated Hilly to
                                                    back down. Aibileen retires and goes to live with Minny and her children.</p>


                                            </div>
                                            <div class="modal-footer flexcard-header-fontcolor">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- div right side first container col - 8 -->

    </div>
    <!-- div row first container -->

</div>
<!-- div end container -->


<br>

<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-6">
            <iframe width="550" height="303" src="https://www.youtube.com/embed/8vKvhqDqtU0" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6">
            <div class="card background-color-flexcard">
                <div class="card-header flexcard-header-fontcolor">
                    Awards and nominations
                </div>
                <div class="card-body background-color-flexcard-body">
                    <p class="card-text">
                        <div class="row">

                            <div class="col-4 center">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/BAFTA_Awards.png" alt="AcademyAwards" height="59px" width="80px"> <br>

                                        <p class="font-awards text-center">ABAFTA Awards
                                        </p>


                                    </div>
                                </div>
                            </div>

                            <div class="col-4 center">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/AFI_Awards.png" alt="AFI Awards" height="59px" width="80px">
                                        <p class="font-awards text-center">AFI Awards
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 center">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/academyawards.png" alt="AcademyAwards" height="59px" width="80px">
                                        <p class="font-awards text-center">Academy Awards
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-4 center">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/goldenglobe.png" alt="AcademyAwards" height="60px" width="80px">
                                        <p class="font-awards text-center">Golden Globe
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 center">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/aafca.jpg" alt="AcademyAwards" height="60px" width="80px">
                                        <p class="font-awards text-center">AAFCA
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-4 center">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/ScreenActorsGuildAwards.png" alt="AcademyAwards" height="60px" width="80px">
                                        <p class="font-awards text-center">SAG Awards
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<br>

<div class="container">

    <div class="row">
        <div class="col">
            <div class="card background-color-flexcard">
                <div class="card-header flexcard-header-fontcolor">
                    Cast
                </div>
                <div class="card-body background-color-flexcard-body">

                    <div class="row">

                        <div class="col">
                            <div id="cast01">

                                <img src="img/Emma_Stone.jpg" alt="Felicity Jones" class="rounded-circle">

                                <p> Emma Stone </p>

                            </div>
                        </div>

                        <div class="col">
                            <div id="cast02">

                                <img src="img/Viola_Davis.jpg" alt="Diego Luna" class="rounded-circle">

                                <p> Viola Davis </p>

                            </div>
                        </div>

                        <div class="col">
                            <div id="cast03">

                                <img src="img/Octavia_Spencer.jpg" alt="Donnie Yen" class="rounded-circle">

                                <p> Octavia Spencer </p>

                            </div>
                        </div>

                        <div class="col">
                            <div id="cast04">

                                <img src="img/Bryce_Dallas.jpg" alt="Alan Tudyk" class="rounded-circle">

                                <p>Bryce Dallas </p>

                            </div>
                        </div>

                        <div class="col">

                            <div id="cast05">

                                <img src="img/Jessica_Chastain.jpg" alt="Felicity Jones" class="rounded-circle">

                                <p> Jessica Chastain</p>

                            </div>
                        </div>


                        <div class="col">
                            <div id="cast01">

                                <img src="img/Emma_Stone.jpg" alt="Felicity Jones" class="rounded-circle">

                                <p> Emma Stone </p>

                            </div>
                        </div>

                    </div>


                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body background-color-flexcard-body">
                            <div class="row">

                                <div class="col">
                                    <div id="cast01">

                                        <img src="img/Emma_Stone.jpg" alt="Felicity Jones" class="rounded-circle">

                                        <p> Emma Stone </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast02">

                                        <img src="img/Viola_Davis.jpg" alt="Diego Luna" class="rounded-circle">

                                        <p> Viola Davis </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast03">

                                        <img src="img/Octavia_Spencer.jpg" alt="Donnie Yen" class="rounded-circle">

                                        <p> Octavia Spencer </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast04">

                                        <img src="img/Bryce_Dallas.jpg" alt="Alan Tudyk" class="rounded-circle">

                                        <p>Bryce Dallas </p>

                                    </div>
                                </div>

                                <div class="col">

                                    <div id="cast05">

                                        <img src="img/Jessica_Chastain.jpg" alt="Felicity Jones" class="rounded-circle">

                                        <p> Jessica Chastain</p>

                                    </div>
                                </div>


                                <div class="col">
                                    <div id="cast01">

                                        <img src="img/Emma_Stone.jpg" alt="Felicity Jones" class="rounded-circle">

                                        <p> Emma Stone </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast01">

                                        <img src="img/Emma_Stone.jpg" alt="Felicity Jones" class="rounded-circle">

                                        <p> Emma Stone </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast02">

                                        <img src="img/Viola_Davis.jpg" alt="Diego Luna" class="rounded-circle">

                                        <p> Viola Davis </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast03">

                                        <img src="img/Octavia_Spencer.jpg" alt="Donnie Yen" class="rounded-circle">

                                        <p> Octavia Spencer </p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div id="cast04">

                                        <img src="img/Bryce_Dallas.jpg" alt="Alan Tudyk" class="rounded-circle">

                                        <p>Bryce Dallas </p>

                                    </div>
                                </div>

                                <div class="col">

                                    <div id="cast05">

                                        <img src="img/Jessica_Chastain.jpg" alt="Felicity Jones" class="rounded-circle">

                                        <p> Jessica Chastain</p>

                                    </div>
                                </div>


                                <div class="col">
                                    <div id="cast01">

                                        <img src="img/Emma_Stone.jpg" alt="Felicity Jones" class="rounded-circle">

                                        <p> Emma Stone </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false"
                        aria-controls="collapseExample">
                              More Cast
                            </button>
                </div>
            </div>

        </div>

    </div>
</div>

<br>


<div class="container">

    <div class="row">



        <div class="col-12">
            <div class="card background-color-flexcard">
                <div class="card-header flexcard-header-fontcolor">
                    Critic and comment
                </div>
                <div class="card-body background-color-flexcard-body">
                    <p class="card-text">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="card-group">
                                    <div class="card">
                                        <div class="card-body background-color-flexcard-body">
                                            <h4 class="card-title">
                                                <h5 class="mt-0"> <img class="d-flex align-self-start mr-3" src="img/image_rater01.png" width="50px"
                                                        height="50px" alt="Generic placeholder image" align="left"> It was AMAZING!</h5>
                                                <br>
                                                <p class="card-text">

                                                    I saw a preview of this film a few weeks ago in Philadelphia. I am huge fan of the book and could not wait to see the movie.
                                                    I was not disappointed. I LOVED this movie. I have not seen anything
                                                    more moving or more real in such a long time.
                                                    <button
                                                        type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Read more...</button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header flexcard-header-fontcolor">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Plot</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                                    </div>
                                                                    <div class="modal-body background-color-flexcard-body">
                                                                        <p>In 1963, Aibileen Clark is a "colored" maid in Jackson,
                                                                            Mississippi, and in intermittent voice overs
                                                                            she tells her "career" story to the aspiring
                                                                            writer Eugenia "Skeeter" Phelan, a recent graduate
                                                                            of Ole Miss and a friend of Aibileen's employer
                                                                            and fellow socialite Elizabeth Leefolt. Aibileen's
                                                                            best friend is the plain-spoken Minny Jackson,
                                                                            the maid of the socialite Leader and controlling
                                                                            Hilly Holbrook. Minny cooks well.</p>

                                                                        <p>Hilly believes that "coloreds" have different diseases
                                                                            from the whites. A tornado comes through town
                                                                            so Hilly wants Minny to go out into the weather
                                                                            to use the new bathroom. Minny uses the household
                                                                            bathroom, is fired by Hilly and people are told
                                                                            she stole property. Aibileen tells Skeeter her
                                                                            stories are worth telling when Minny is fired.</p>

                                                                    </div>
                                                                    <div class="modal-footer flexcard-header-fontcolor">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body background-color-flexcard-body">
                                            <h4 class="card-title">
                                                <h5 class="mt-0"> <img class="d-flex align-self-start mr-3" src="img/image_rater01.png" width="50px"
                                                        height="50px" alt="Generic placeholder image" align="left"> It was AMAZING!</h5>
                                                <br>
                                                <p class="card-text">

                                                    I saw a preview of this film a few weeks ago in Philadelphia. I am huge fan of the book and could not wait to see the movie.
                                                    I was not disappointed. I LOVED this movie. I have not seen anything
                                                    more moving or more real in such a long time.
                                                    <button
                                                        type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Read more...</button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header flexcard-header-fontcolor">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Plot</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                                    </div>
                                                                    <div class="modal-body background-color-flexcard-body">
                                                                        <p>In 1963, Aibileen Clark is a "colored" maid in Jackson,
                                                                            Mississippi, and in intermittent voice overs
                                                                            she tells her "career" story to the aspiring
                                                                            writer Eugenia "Skeeter" Phelan, a recent graduate
                                                                            of Ole Miss and a friend of Aibileen's employer
                                                                            and fellow socialite Elizabeth Leefolt. Aibileen's
                                                                            best friend is the plain-spoken Minny Jackson,
                                                                            the maid of the socialite Leader and controlling
                                                                            Hilly Holbrook. Minny cooks well.</p>

                                                                        <p>Hilly believes that "coloreds" have different diseases
                                                                            from the whites. A tornado comes through town
                                                                            so Hilly wants Minny to go out into the weather
                                                                            to use the new bathroom. Minny uses the household
                                                                            bathroom, is fired by Hilly and people are told
                                                                            she stole property. Aibileen tells Skeeter her
                                                                            stories are worth telling when Minny is fired.</p>

                                                                    </div>
                                                                    <div class="modal-footer flexcard-header-fontcolor">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body background-color-flexcard-body">
                                            <h4 class="card-title">
                                                <h5 class="mt-0"> <img class="d-flex align-self-start mr-3" src="img/image_rater01.png" width="50px"
                                                        height="50px" alt="Generic placeholder image" align="left"> It was AMAZING!</h5>
                                                <br>
                                                <p class="card-text">

                                                    I saw a preview of this film a few weeks ago in Philadelphia. I am huge fan of the book and could not wait to see the movie.
                                                    I was not disappointed. I LOVED this movie. I have not seen anything
                                                    more moving or more real in such a long time.
                                                    <button
                                                        type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Read more...</button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header flexcard-header-fontcolor">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Plot</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                                    </div>
                                                                    <div class="modal-body background-color-flexcard-body">
                                                                        <p>In 1963, Aibileen Clark is a "colored" maid in Jackson,
                                                                            Mississippi, and in intermittent voice overs
                                                                            she tells her "career" story to the aspiring
                                                                            writer Eugenia "Skeeter" Phelan, a recent graduate
                                                                            of Ole Miss and a friend of Aibileen's employer
                                                                            and fellow socialite Elizabeth Leefolt. Aibileen's
                                                                            best friend is the plain-spoken Minny Jackson,
                                                                            the maid of the socialite Leader and controlling
                                                                            Hilly Holbrook. Minny cooks well.</p>

                                                                        <p>Hilly believes that "coloreds" have different diseases
                                                                            from the whites. A tornado comes through town
                                                                            so Hilly wants Minny to go out into the weather
                                                                            to use the new bathroom. Minny uses the household
                                                                            bathroom, is fired by Hilly and people are told
                                                                            she stole property. Aibileen tells Skeeter her
                                                                            stories are worth telling when Minny is fired.</p>

                                                                    </div>
                                                                    <div class="modal-footer flexcard-header-fontcolor">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body background-color-flexcard-body">
                                            <h4 class="card-title">
                                                <h5 class="mt-0"> <img class="d-flex align-self-start mr-3" src="img/image_rater01.png" width="50px"
                                                        height="50px" alt="Generic placeholder image" align="left"> It was AMAZING!</h5>
                                                <br>
                                                <p class="card-text">

                                                    I saw a preview of this film a few weeks ago in Philadelphia. I am huge fan of the book and could not wait to see the movie.
                                                    I was not disappointed. I LOVED this movie. I have not seen anything
                                                    more moving or more real in such a long time.
                                                    <button
                                                        type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Read more...</button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header flexcard-header-fontcolor">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Plot</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                                    </div>
                                                                    <div class="modal-body background-color-flexcard-body">
                                                                        <p>In 1963, Aibileen Clark is a "colored" maid in Jackson,
                                                                            Mississippi, and in intermittent voice overs
                                                                            she tells her "career" story to the aspiring
                                                                            writer Eugenia "Skeeter" Phelan, a recent graduate
                                                                            of Ole Miss and a friend of Aibileen's employer
                                                                            and fellow socialite Elizabeth Leefolt. Aibileen's
                                                                            best friend is the plain-spoken Minny Jackson,
                                                                            the maid of the socialite Leader and controlling
                                                                            Hilly Holbrook. Minny cooks well.</p>

                                                                        <p>Hilly believes that "coloreds" have different diseases
                                                                            from the whites. A tornado comes through town
                                                                            so Hilly wants Minny to go out into the weather
                                                                            to use the new bathroom. Minny uses the household
                                                                            bathroom, is fired by Hilly and people are told
                                                                            she stole property. Aibileen tells Skeeter her
                                                                            stories are worth telling when Minny is fired.</p>

                                                                    </div>
                                                                    <div class="modal-footer flexcard-header-fontcolor">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <br>

                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body background-color-flexcard-body">
                                        <h4 class="card-title ">
                                            <!-- No title -->
                                            <br>
                                            <h5 class="flexcard-header-fontcolor">Give comment </h5>
                                            <br>
                                            <form>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" type="text" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" type="email" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <label>Message</label>
                                                    </div>
                                                    <div class="col">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <label>Rating</label>
                                                    </div>
                                                    <div class="col">

                                                        <div class="stars">
                                                            <!-- ref ; http://www.cssscript.com/simple-5-star-rating-system-with-css-and-html-radios/ -->
                                                            <form action="">
                                                                <input class="star star-5" id="star-5" type="radio" name="star" />
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" name="star" />
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" name="star" />
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" name="star" />
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" name="star" />
                                                                <label class="star star-1" for="star-1"></label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="checkbox"><input type="checkbox"> I agree with terms</div>
                                                <br>
                                                <button class="btn btn-primary" type="submit">Submit</button>

                                            </form>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </p>
                </div>
            </div>
        </div>

    </div>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>