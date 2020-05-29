
<?php
$error = false;
if (isset($_POST['submit'])) {
    


    $con = mysqli_connect($server, $username, $password,"try1");
    if (!$con) {
        die("db is not connected ". mysqli_connect_error());
    }
    $log_ID = $_POST['log_ID'];
    $log_PASS = $_POST['log_PASS'];

    $sql = "SELECT * FROM `test1` WHERE Email = '$log_ID' AND Password = '$log_PASS'  ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if ($row == true) {
       include 'page1.html';
    } else {
       
    }
}
?>
<?php
if (isset($_POST['firstname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password,"try1");

    if (!$con) {
        die("connection to this db failed due to". mysqli_connect_error());
    }

    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Email =$_POST['email'];
    $Password =$_POST['password'];

    $sql = "INSERT INTO `try1`.`test1`(`FirstName`, `LastName`, `Email`, `Password`, `Date`) VALUES ('$Firstname','$Lastname','$Email','$Password', current_timestamp());";

    if ($con -> query($sql) == true) {
    } else {
        echo "error $sql <br> $con->error";
    }
    $con->close();
}
?>