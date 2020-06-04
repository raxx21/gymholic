<?php

if(isset($_POST["reset-password-submit"])){

    $selector =$_POST["selector"];
    $validator =$_POST["validator"];
    $password =$_POST["password"];
    $repassword = $_POST["re-password"];

    if(empty($password) || empty($repassword)){
        header("Location: ../login.php?newpwd=empty");
        exit();
    }
    elseif($password != $repassword){
        header("Location: ../login.php?newpwd=notmatch");
        exit();
    }


    $current_date = date("U");
    require 'condb.php';

    $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >=?;";
    $stmt= mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss" , $selector , $current_date);
        mysqli_stmt_execute($stmt);

        $result= mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            echo "you have to re-submit your request";
            exit();
        }
        else{
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if($tokenCheck == false){
                echo "you have to re-submit your request";
                exit();
            }
            elseif($tokenCheck == true){

                $tokenEmail = $row["pwdResetEmail"];
                $sql = "SELECT * FROM test1 WHERE Email=?;";
                $stmt= mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../login.php?error=sqlerror");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result= mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "There is an error";
                        exit();
                    } else {
                        $sql = "UPDATE test1 SET Password=? WHERE Email=?;";
                        $stmt= mysqli_stmt_init($con);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location: ../login.php?error=sqlerror");
                            exit();
                        }
                        else{
                            $new_hashedpass = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $new_hashedpass, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
                            $stmt= mysqli_stmt_init($con);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                header("Location: ../login.php?error=sqlerror");
                                exit();
                            }
                            else{
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../login.php?newpwd=updated");
                            }
                        }
                    }
                }
            }
            else{
                echo "you have to re-submit your request";
                exit();
            }

        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
else{
    header("Location: ../login.php");
    exit();
}