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
    <link rel="stylesheet" href="css/forget.css">
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
                <li class="nav-item active">
                    <a class="nav-link" href="home.htm">Home <span class="sr-only"></span></a>
                </li>

            </ul>

        </div>
    </nav>


    <!-- form content -->

    <form action="page2.php">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 main-frame-forget-2">
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Height</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Weight</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday" class="form-control">
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend ">
                            <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                        </div>
                        <select class="custom-select col-lg-3" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">Female</option>
                  <option value="2">Male</option>
                </select>
                    </div>
                    <div>
                        <button class="btn btn-primary">Continue --></button>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </form>

</body>

</html>