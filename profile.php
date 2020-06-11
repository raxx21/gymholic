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
                <li class="nav-item ">
                    <a class="nav-link" href="page2.html">Back <span class="sr-only"></span></a>
                </li>

            </ul>

        </div>
    </nav>
    <!-- php code for name and info -->

                            <?php
                            require 'includes/condb.php';
                            $email =  $_SESSION['useremail'];
                            $sql = "SELECT * FROM test1 WHERE Email= ?";
                            $stmt= mysqli_stmt_init($con);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo 'mysqlerror';
                            }
                            else{
                                mysqli_stmt_bind_param($stmt , "s", $email);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                                if($row = mysqli_fetch_assoc($result)){

                           ?>

    <!-- Profile Form -->

    <form action="">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 form-group main-frame-forget-3">
                    <div class="inner">
                        <div class=" col-lg-12 user-img text-center">
                            <input type="file" id="photo-upload" name="photo">
                            <label for="photo-upload"><img  src="img/face.png" alt=""></label>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="firstname" class="form-control" placeholder="First Name" value= <?php echo $row['FirstName']; ?>>
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name" value= <?php echo $row['LastName']; ?>>
                            <input type="email" name="email" class="form-control" placeholder="Email" value= <?php echo $row['Email']; ?>>
                            <input type="phone" name="phone" class="form-control" placeholder="Phone No.">
                            <small class="form-text form-mute">If you want to Restart your workout routine then click the Reset Button below.</small>
                            <button class="btn btn-danger">Reset</button>
                            <small class="form-text form-mute">If you want to edit your Profile click the edit button below.</small>
                            <button class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

    </form>
    <?php
                                }
                            }
    ?>

</body>

</html>