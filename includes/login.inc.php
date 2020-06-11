<?php
if(isset($_POST['login-submit'])){
    require 'condb.php';

$log_ID = $_POST['log_ID'];
$lOG_PASS = $_POST['log_PASS'];

    if(empty($log_ID) || empty($lOG_PASS)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM test1 WHERE Email=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$log_ID);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdcheck = password_verify($lOG_PASS, $row['Password']);
                if($pwdcheck == "1"){
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                elseif($pwdcheck == "0"){
                    session_start();
                    $_SESSION['userId'] = $row['Id'];
                    $_SESSION['useremail'] = $row['Email'];

                    header("Location: ../profile.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }


}
else{
    header("Location: ../login.php");
}