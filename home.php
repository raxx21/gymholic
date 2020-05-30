<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMHOLIC</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7108b832d3.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <!-- <nav class="navbar navbar-light bg-light navbar-dark bg-dark">
        <div align=center></div>
        <span class="navbar-brand mb-0 h1">GYMHOLIC</span>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <a class="navbar-brand" href="#">GYMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.html">Log In <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav> -->

    <!-- Navigation Bar-->

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/name.jpg" alt="">YMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Background Img -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/background4.jpg" alt="1">
                <div class="carousel-caption text-center">
                    <h1 class="display-2">Welcome</h1>
                    <h3>Welcome to our website</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/background7.jpg" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/background6.jpg" alt="3">
            </div>
        </div>
    </div>

    <!-- Jumbotron -->

    <div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p class="lead">
                    This is a site where you can build your dream body. We will provide you very thing from diet to workout plans. Yeah!!! you have to do only one thing just follow the instructions.
                </p>
            </div>
        </div>
    </div>

    <!-- Welcome -->

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"> Welcome</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">
                    We are very Excited to start your journey of building your body.
                </p>
            </div>
        </div>
    </div>

    <!-- Three sections  -->

    <div class="container-fluid padding">
        <div class="row text-center image-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">

                <img src="img/icon4.jpg" alt="">
                <br>
                <h1>WEIGHT GAIN</h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/icon5.png" alt="">
                <br>
                <h1>WEIGHT LOSS</h1>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="img/icon3.jpg" alt="">
                <br>
                <h1>FITNESS</h1>
            </div>
        </div>
        <hr class="my-4">
    </div>



    <!-- Content -->

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class=" col-lg-6 col-xl-6 col-md-6 col-xs-12">
                <h1>Here's What we do...</h1>
                <p>We ask you the details of your body like height,weight,age,etc. Then set a goal depend upon your choice and provide you the best diet and workout plan. We consider all the situation of your daily plans and then start being work on it.
                    We you need to follow all the instruction and bum!!! you will be the person you always wanted to be.</p>
            </div>
            <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12">
                <img src="img/content.jpg" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>



    <!-- what we provide -->

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">What We Provide</h1>
                <hr class="hr1">
                <br><br>
            </div>

            <div class="col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <img src="img/photo1.jpg" alt="" class="img-thumbnail">
                <br>
                <br>
                <h1>Workout Plan</h1>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-6 col-xs-12">
                <img src="img/photo2.jpg" alt="" class="img-thumbnail">
                <br>
                <br>
                <h1>Diet Plan</h1>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-12 col-xs-12">
                <img src="img/photo3.jpg" alt="" class="img-thumbnail">
                <br>
                <br>
                <h1>Food information</h1>
            </div>
        </div>
        <hr class="my-4">
    </div>


    <!-- Connect -->

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Connect</h2>
                <br>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>


    <!-- footer -->

    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <h1><img src="img/name.jpg" alt="">YMHOLIC</h1>
                    <hr class="light">
                    <p>555-555-5555</p>
                    <p>rajeshchittya21@gmail.com</p>
                    <p>803 Arihant City</p>
                    <p>Bhiwandi,Thane,India</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our Hours</h5>
                    <hr class="light">
                    <p>Monday: 9am - 5pm</p>
                    <p>Saturday: 10am - 4pm</p>
                    <p>Sunday: closed</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p>City,State,00000</p>
                    <p>City,State,00000</p>
                    <p>City,State,00000</p>
                    <p>City,State,00000</p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <p>@GYMHOLIC</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- <br>
    <div class="container" align=center>
        <h2>UserName:</h2>
        <input type="text">
        <h2>Password:</h2>
        <input type="text">
        <br><br>
        <input type="button" value="sumbit">
        <br><br>
        <a href="C:\Rajesh\projects\gymholic\Froget.html">Froget Password</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="C:\Rajesh\projects\gymholic\create.html">Create New</a>
    </div> -->
    <!-- <div class="container">
        <form>
            <div class="form-group">
                <label for="mail">Email:</label>
                <input type="email" name="mail" id="" class="form-control">
                <small class="form-text text-muted">We'll never share your email with anyone</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> -->



    <!-- Form -->

    <!-- <div class="jumbotron  container ">

        <h1>Sign In Page</h1>
        <p>You have to enter your details to create your own account.</p>
    </div>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="fn">First Name:</label>
                <input type="text" name="fn" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="ln">Last Name:</label>
                <input type="text" name="ln" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="mail">Email:</label>
                <input type="email" name="mail" id="" class="form-control">
                <small class="form-text text-muted text-white">We'll never share your email with anyone</small>
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="pass">Re-Password:</label>
                <input type="password" name="repass" id="" class="form-control">
            </div>
            <button type="button" class="btn btn-dark btn-lg">Sign In</button>
            <br><br>
        </form>
    </div> -->


</body>

</html>