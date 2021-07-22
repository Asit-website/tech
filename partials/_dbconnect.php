<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="loaf";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("occured an error"  . mysqli_error());
    }  
?> 