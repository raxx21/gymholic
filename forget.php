<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7108b832d3.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7108b832d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/forget.css">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/name.jpg" alt="">YMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Back to Login<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Forget Form -->
    <div class="container-fluid row ">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 main-frame-forget">
            <div class="col-lg-12 my-img text-center">
                <img src="img/forget.png" alt="">
            </div>
            <div class="col-lg-12 text-center main-line">
                <h1>Trouble Logging In?</h1>
            </div>

            <div class="form-group col-lg-12">
                <p>
                    Enter your username or email and we'll send you a link to get back into your account.
                </p>
                <form action="forget.inc.php" method="POST">
                    <input type="email" class="form-control" name="email" id="" placeholder="Email">
                    <button type="submit" name="forget-password-submit" class="btn btn-dark btn-block">Send Login Link</button>
                </form>
                <?php
                    if(isset($_POST["reset"])){
                        if($_GET["reset"] == "success"){
                            echo "<p> Check your email. </p>";
                        }
                    }
                ?>
            </div>
            <div class="row or-session">
                <div class="col-lg-5">
                    <hr>
                </div>
                <div class="col-lg-2 text-center">
                    <h6>OR</h6>
                </div>
                <div class="col-lg-5">
                    <hr>
                </div>
            </div>
            <div class="text-center my-new-1">
                <a href="#">Create-New-Account.</a>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>


</body>

</html>