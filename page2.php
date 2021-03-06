<?php
session_start();
if(isset($_SESSION['useremail'])){

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
    <link rel="stylesheet" href="css/page2.css">
</head>

<body>
    <!-- Navigation Bar-->

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/name.jpg" alt="">YMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item text-center">
                    <form action="includes/logout.inc.php">
                        <button class="btn btn-dark " name="logout-submit">Log Out</button>
                    </form>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Jumbotron -->


    <div class="col jumbotron my-color1">
        <div class="row-lg-5">
            <div class="row text-center">
                <div class="col-lg-4">
                    <h2>0</h2>
                    <br>
                    <h3>WORKOUT</h3>
                </div>
                <div class="col-lg-4">
                    <h2>0</h2>
                    <br>
                    <h3>KCAL</h3>
                </div>
                <div class="col-lg-4">
                    <h2>0</h2>
                    <br>
                    <h3>MINUTE</h3>
                </div>
            </div>
        </div>
    </div>


    <!-- Set Goals -->
    <div class="card text-center my-color2">
        <div class="card-body">
            <h5 class="card-title">Set your Goals</h5>
            <p class="card-text">Set your goals for your weekly workout plans to maintain your body in good shape.</p>
            <a href="#" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#goal" aria-expanded="false" aria-controls="#goal">Set Goals</a>
        </div>
        <div class="collapse text-center" id="goal">
            <div class="input-group mb-3 ">
                <div class="col-lg-2"></div>
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Days</label>
                </div>
                <select class="custom-select col-lg-3 " id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                    </select>
                <div class="col-lg-1"></div>
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Starts from</label>
                </div>
                <select class="custom-select col-lg-3 " id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          <option value="1">Sunday</option>
                          <option value="2">Monday</option>
                        </select>
            </div>
        </div>
    </div>

    <!-- 24/7 Exercise -->

    <div class="container-fluid row">
        <div class="col-lg-6 text-center">
            <a href="full-body.php"><img src="img/full-body.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Full Body Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="lower-body.html"><img src="img/lower-body.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Lower Body Workout</h3>
        </div>
    </div>

    <!-- Beginner -->
    <div class="card text-center my-color2">
        <div class="card-body">
            <h1 class="card-title">BEGINNER</h1>
        </div>
    </div>
    <div class="container-fluid row">
        <div class="col-lg-6 text-center">
            <a href="b-arms.html"><img src="img/B-arms.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Arms Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="b-chest.html"><img src="img/B-chest (1).jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Chest Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="b-back.html"><img src="img/B-Back.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Back Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="b-leg.html"><img src="img/B-legs.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Legs Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="b-shoulders.html"><img src="img/B-shoulder.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Shoulders Workout</h3>
        </div>
    </div>

    <!-- Intermediate -->
    <div class="card text-center my-color2">
        <div class="card-body">
            <h1 class="card-title">INTERMEDIATE</h1>
        </div>
    </div>
    <div class="container-fluid row">
        <div class="col-lg-6 text-center">
            <a href="i-arms.html"><img src="img/B-arms.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Arms Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="i-chest.html"><img src="img/B-chest (1).jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Chest Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="i-back.html"><img src="img/B-Back.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Back Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="i-leg.html"><img src="img/B-legs.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Legs Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="i-shoulders.html"><img src="img/B-shoulder.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Shoulders Workout</h3>
        </div>
    </div>

    <!-- Advance -->
    <div class="card text-center my-color2">
        <div class="card-body">
            <h1 class="card-title">ADVANCE</h1>
        </div>
    </div>
    <div class="container-fluid row">
        <div class="col-lg-6 text-center">
            <a href="a-arms.html"><img src="img/B-arms.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Arms Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="a-chest.html"><img src="img/B-chest (1).jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Chest Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="a-back.html"><img src="img/B-Back.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Back Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="a-leg.html"><img src="img/B-legs.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Legs Workout</h3>
        </div>
        <div class="col-lg-6 text-center">
            <a href="a-shoulders.html"><img src="img/B-shoulder.jpg" alt="full-body" class="img-thumbnail"></a>
            <h3>Shoulders Workout</h3>
        </div>
    </div>

    <br><br><br>
</body>

</html>
<?php
}
else{
header("Location: login.php?direct=notallowed");
}
?>