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
    <link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript" src="js/sigin.js"></script>
</head>

<body>


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/name.jpg" alt="">YMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>

        </div>
    </nav>


    <!-- Sign In Form -->
    <div class="container-fluid row">
        <div class="col-lg-7"></div>
        <div class="col-lg-4 main-frame-sign">
            <div class="col-12  text-center">
                <h2>Sign In</h2>
            </div>
            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo "<p class='error text-center'>Fill in the blocks properly</p>";
                }
                elseif($_GET['error'] == "invalidmail"){
                    echo "<p class='error text-center'>Invalid Email</p>";
                }
                elseif($_GET['error'] == "invalidfirstname"){
                    echo "<p class='error text-center'>Invalid FirstName</p>";
                }
                elseif($_GET['error'] == "invalidLastname"){
                    echo "<p class='error text-center'>Invalid LastName</p>";
                }
                elseif($_GET['error'] == "passwordcheck"){
                    echo "<p class='error text-center'>Password is Mismatch</p>";
                }
                elseif($_GET['error'] == "mailalreadytaken"){
                    echo "<p class='error text-center'>Email already exists</p>";
                }
                elseif($_GET['error'] == "sqlerror"){
                    echo "<p class='error text-center'>Server is not responding</p>";
                }
            }
            elseif(isset($_GET['signup'])){
                if($_GET['signup'] == "success"){
                    echo "<p class='success text-center'>Successfully Sign Up</p>";
                }
            }
            ?>

            <div>
                <form action="includes/signup.inc.php" method="POST">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="mail">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Re-Password</label>
                        <input type="password" class="form-control" name="password-rep">
                    </div>
                    <Button name="signup-submit" class="btn btn-primary btn-block">Sign In</Button>
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
                    <div class="text-center my-new-2">
                        <a href="login.html">Already have a Account</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>

</body>

</html>