<?php

session_start();
$Email = $_SESSION['useremail'];

if(isset($_POST['btn-submit'])){

    require 'condb.php';

    $age= $_POST['age'];
    $height= $_POST['height'];
    $weight= $_POST['weight'];
    $birthday= $_POST['birthday'];
    $gender= $_POST['gender'];

    if(empty($age) || empty($height) || empty($weight) || empty($birthday) || empty($gender) ){

        header("Location: ../page1.php?error=emptyfields");
        exit();

    }else{
        

                $sql = "SELECT * FROM userinfo WHERE Email = '$Email';";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row['Email'] == $Email){
                    
                    $sql = "UPDATE `userinfo` set `Age`= ?,`Height`=?,`Weight`=?,`Birthday`=?,`Gender`=? WHERE Email =?";
                    $stmt = mysqli_stmt_init($con);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        
                        header("Location: ../page1.php?error=sqlerror");
                        exit();
                    }
                    else{
                        mysqli_stmt_bind_param($stmt , "ssssss", $age, $height, $weight, $birthday, $gender,$Email);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../page2.php?info=success");
                    }
                }
               
            }
        }
    
else{
    header("Location: ../page1.php");
}