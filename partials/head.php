<link rel="stylesheet" href="css/head.css">
<?php
session_start();
echo'<nav class="navbar navbar-expand-lg navbar-dark   h-resp my-0 py-0 ">
    <div class="container-fluid stick py-3">
        <li style="list-style:none ; color: rgb(85, 221, 214);" class="nav-item mx-1 cen  hov fov dropdown">
        <a style=" color: rgb(85, 221, 214);" class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Extra
        </a>
        <ul style="position:relative ; background:black ;" class="dropdown-menu " aria-labelledby="navbarDropdown">
          <li><a  style=" color: rgb(85, 221, 214);" class="dropdown-item" href="notes.php">Our Notes</a></li>
          <li><a  style=" color: rgb(85, 221, 214);" class="dropdown-item" href="confesss.php">Our confess</a></li>
          <li><a style=" color: rgb(85, 221, 214);" class="dropdown-item" href="news.php">Our News Api</a></li>
        </ul>
      </li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav m-auto   ">
            <li class="nav-item mx-1 cen ">
            <a class="nav-link  hov" style="color: rgb(85, 221, 214);" href="/project1">Home</a>
        </li>
                <li class="nav-item mx-1 cen ">
                    <a class="nav-link  hov" style="color: rgb(85, 221, 214);" href="about.php">About</a>
                </li>
                <li class="nav-item mx-1 cen">
                    <a class="nav-link  hov" style="color: rgb(85, 221, 214);" href="events.php"> events</a>
                </li>
                <li class="nav-item mx-1 ">
                    <a href="index.php"><img class="imga mx-1 hov" src="img/1.jpg" width="30px" alt=""></a>
                </li>
               
                <li class="nav-item mx-1 cen">
                    <a class="nav-link  hov" style="color: rgb(85, 221, 214);" href="contact.php">Contact</a>
                </li>
                <li class="nav-item mx-1 cen">
                    <a class="nav-link  hov" style="color: rgb(85, 221, 214);" href="blog.php">Blog</a>
                </li>
                <li class="nav-item mx-1 cen">
                    <a class="nav-link hov" style="color: rgb(85, 221, 214);" href="support.php">Support</a>
                </li>
            </ul>';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
              echo'
              <p class="us animate__animated animate__heartBeat animate__infinite infinite "> welcome ' .$_SESSION['userem'] .'</p>
              <li class="nav-item mx-1 cen" style="list-style: none;">
               <a href="partials/_logout.php" class="anchor mx-2" style="color: rgb(85, 221, 214);" >Logout</a>
             </li>'; 
                }
        else {
            echo'<li class="nav-item mx-1 cen" style="list-style: none;">
            <a href=""  data-bs-toggle="modal" data-bs-target="#loginModal" ><img class="" width="40px" src="img/logo2.pnj.png" alt=""></a>
           </li>
           <li class="nav-item mx-1 cen" style="list-style: none;">
                <a href="" class="ml-2 anchor" style="color: rgb(85, 221, 214);" data-bs-toggle="modal" data-bs-target="#loginModal" >Login</a>
          </li>
          <li class="nav-item mx-1 cen" style="list-style: none;">
                <a href="" data-bs-toggle="modal" data-bs-target="#signupModal" ><img class="" width="40px" src="img/logo2.pnj.png" alt=""></a>
           </li>
           <li class="nav-item mx-1 cen" style="list-style: none;">
                <a href="" class="ml-2 anchor" style="color: rgb(85, 221, 214);" data-bs-toggle="modal" data-bs-target="#signupModal" >Signup</a>
            </li>';
           }
        echo'</div>
    </div>
</nav>';
include 'partials/_loginModals.php';
include 'partials/_signupModals.php';
  if(isset($_GET['signupsuccess']) && $signupsuccess="true"){
   echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
   <strong> Success! </strong> You can  now login .
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
  }
  if(isset($_GET['success']) && $success="false"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong> Error! </strong> Password miss-match try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  if(isset($_GET['succes']) && $succes="false"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong> Error! </strong> Username already exist ,use a valid username.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  if(isset($_GET['logintrue']) && $logintrue="true"){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong> success! </strong> Welcome You loggedin successfully, visit the website for better experience.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  if(isset($_GET['loginError']) && $loginError="false"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong> Error! </strong> Invalid credentials please check.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  if(isset($_GET['error']) && $error="true"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong> Error! </strong> Invalid password verify.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  if(isset($_GET['logo']) && $logo="true"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong> success! </strong> Logout successfully, Hope come back hurry?.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>