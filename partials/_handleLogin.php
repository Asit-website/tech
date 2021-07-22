<?php
$showError="false";
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $email=$_POST['loginName'];
    $pass=$_POST['loginpass'];
    $sql="select * from `userval` where username = '$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows == 1){
        while($row=mysqli_fetch_assoc($result)){
          if(password_verify($pass,$row['password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            echo'<script> window.location.href="/project1/index.php?logintrue=true" </script>';
            $_SESSION['sno']=$row['sno'];
            $_SESSION['userem'] = $email;
            exit;
          }
  
          else{
            echo'<script> window.location.href="/project1/index.php?loginError=false" </script>';
            exit;
          }
  
        } 
  
      }
    
    else{
      echo'<script> window.location.href="/project1/index.php?error=true" </script>';
      exit;
    }
  }
?>