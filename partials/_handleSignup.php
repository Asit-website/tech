<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['name'];
    $pass=$_POST['signupPass'];
    $cpass=$_POST['signupcPass'];
    $existSql="select * from `userval` where username = '$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
        echo'<script> window.location.href="/project1/index.php?succes=false" </script>';
        exit;
    }
    else{
        if($pass==$cpass){
         $hash=password_hash($pass,PASSWORD_DEFAULT);
         $sql="INSERT INTO `userval` ( `username`, `password`, `timest`) VALUES ('$user_email', '$hash', current_timestamp());";
         $result=mysqli_query($conn,$sql);
         if($result){
            echo'<script> window.location.href="/project1/index.php?signupsuccess=true"</script>';
            exit;
         }
        }
        else{
         echo'<script> window.location.href="/project1/index.php?success=false" </script>';
         exit;
        }
    }
}
?>