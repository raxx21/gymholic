<?php
if(isset($_POST['signup-submit'])){

    // Connection file
    require 'condb.php';

    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Email =$_POST['mail'];
    $Password =$_POST['password'];
    $Passwordrep = $_POST['password-rep'];

    // Types of error
   
    if(empty($Firstname) || empty($Lastname) || empty($Email) || empty($Password)){
        header("Location: ../signup.php?error=emptyfields&firstname=".$Firstname."&lastname=".$Lastname."&mail".$Email );
        exit();
    }
    elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$Firstname) && !preg_match("/^[a-zA-Z0-9]*$/")){
        header("Location: ../signup.php?error=invalidmailfirstnamelastname");
        exit();
    }
    elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&firstname=".$Firstname."&lastname=".$Lastname);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$Firstname)){
        header("Location: ../signup.php?error=invalidfirstname&lastname=".$Lastname."&mail".$Email);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$Lastname)){
        header("Location: ../signup.php?error=invalidLastname&firstname=".$Firstname."&mail".$Email);
        exit();
    }
    elseif($Password !== $Passwordrep){
        header("Location: ../signup.php?error=passwordcheck&firstname=".$Firstname."&lastname=".$Lastname."&mail".$Email);
        exit();
    }
    // Check Email
    else{
        $sql = "SELECT * FROM test1 WHERE Email=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt , "s", $Email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0){
                header("Location: ../signup.php?error=mailalreadytaken&firstname=".$Firstname."&lastname=".$Lastname);
                exit();
            }
            else{
                // store data in db
                $sql = "INSERT INTO test1 (FirstName, Lastname, Email, Password, Date, status) VALUES (?,?,?,?,current_timestamp(),1)";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPass = password_hash($Password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt , "ssss", $Firstname, $Lastname , $Email, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    $sql = "INSERT INTO userinfo (Email) VALUES(?);";
                    $stmt = mysqli_stmt_init($con);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }
                    else{
                        mysqli_stmt_bind_param($stmt,"s",$Email);
                        mysqli_stmt_execute($stmt);
                        $sql = "INSERT INTO userevent (Email) VALUES(?);";
                        $stmt = mysqli_stmt_init($con);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            header("Location: ../signup.php?error=sqlerror");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt,"s",$Email);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../signup.php?signup=success");
                            exit();
                        }
            
                    }
                   
                }
            }
        }
    }
mysqli_stmt_close($stmt);
mysqli_close($con);
}
else{
    header("Location: ../signup.php");
}
