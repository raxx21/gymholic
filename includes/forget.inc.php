<?php

if(isset($_POST['forget-password-submit'])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "localhost:8080/gymholic/forget-reset.php?&selector=".$selector."&validator=". bin2hex($token);

    $expires = date("U") + 600;

    require 'condb.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt)){
        header("Location: ../login.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt)){
        header("Location: ../login.php?error=sqlerror");
        exit();
    }
    else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail ,$selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);

    $to = $userEmail;
    $subject = 'Reset your password for gymholic';

    $message = '<p> We received a password reset request. The link to reset your password is below. if you did not make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a> href="'.$url.'">'.$url.'</a></p>';

    $headers = "From gymholic <gymholic@gmail.com>\r\n";
    $headers .= "Reply-To: gymholic@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to , $subject, $message ,$headers);

    header("Location: ../forget.php?reset=success");
}
else{
    header("Location: ../home.php");
}