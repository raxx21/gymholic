<?php

session_start();
$id = $_SESSION['userId'];

if(isset($_POST['btn-upload'])){
    require 'condb.php';

$file = $_FILES['file'];

$fileName= $file['name'];
$fileTmp= $file['tmp_name'];
$fileError= $file['error'];
$fileSize= $file['size'];
$fileType= $file['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png','pdf');

if(in_array($fileActualExt , $allowed)){

    if($fileError === 0){

        if($fileSize < 1000000){

            $fileNameNew = "profile".$id.".".$fileActualExt;
            $dirpath = realpath(dirname(getcwd()));
            $fileDestination = "../upload/" . $fileNameNew;
            move_uploaded_file($fileTmp, $fileDestination);
            $sql = "UPDATE test1 SET status = 0 WHERE id = '$id';";
            $result = mysqli_query($con , $sql);
            header("Location: ../profile.php?upload=success");
        } else{
            echo 'The File is to big';
        }

    }else{
        echo 'You have an error';
    }

}else{
    echo 'Wrong image type';
}


}else{
    header("Location: ../profile.php");
}