<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Love Story---Unfinished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .blog img {
            width: 100%;
            height: 50vh;
        }

        .fx {
            /* text-align: right; */
            /* padding-left:100px ; */
            text-align: right;
            /* font-weight: bold; */

        }

        .glorious {
            text-align: center;
            width: 150px;
            border: 0.5px solid #080808;
            position: relative;
            bottom: 3px;
        }

        .birla {
            background-color: #4a5052;
        }

        .animate__animated.animate__zoomIn {
            --animate-duration: 2s;
        }
        .user-time{
            padding-right:60px ;
        }
        .user-post{
            padding-left: 60px;
        }
        @media only screen and (max-width:766px){
            .user-time{
                padding-right:0px ;
            }
            .user-post{
                padding-left: 0px;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/head.php' ;  ?>
    <?php  include 'partials/_dbconnect.php' ; ?>
    <?php 
        $showAlert=false;
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $showAlert=true;
            $tit=$_POST['title'];
            $de=$_POST['desc'];

          $tit=str_replace("<","&lt;",$tit);
          $tit=str_replace(">","&gt;",$tit);

          $de=str_replace("<","&lt;",$de);
          $de=str_replace(">","&gt;",$de);
          $sno=$_POST['sno'];
          $sql="INSERT INTO `thread` ( `blog_title`, `blog_desc`, `blog_user_id`, `timestamp`) VALUES ('$tit', '$de', '$sno', current_timestamp())";
          $result=mysqli_query($conn,$sql);
          if($showAlert){
              echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong> Success! </strong> Your blog has been added successfully.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
          }
          else{
              echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
              <strong> Error </strong> Your blog has not been added please add.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
          }

        }
    ?>
    <section class="blog">
        <div class="flog">
            <img src="img/blog4.jpg" alt="not">
        </div>
    </section>
    <section class="blog_post py-4 px-2 birla">
        <h3 class="animate__animated animate__zoomIn animate__infinite infinite"
            style="padding:0px 30px ; color: rgb(224, 117, 189); text-align: center;">Start a new blog Post</h3>
        <?php 
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo'<div class="fort py-4">
            <form action="'. $_SERVER["REQUEST_URI"] .'" method="post" class="col-md-10 d-block m-auto">
                <div class="form-group py-2">
                    <label for="title"> <span style="position: relative; bottom: 5px; color: white;">Title</span>
                    </label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                </div>
                <input type="hidden" name="sno" value="'. $_SESSION['sno'] .'">
                <div class="form-group py-2">
                    <label for="blog_description"><span style="position: relative; bottom: 5px; color: white;">desc</span></label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
            </form>
        </div>';
        }
        else{
            echo ' <h3 class="text-center text-light py-2">You need to be loggedin before starting blog post! <span><a data-bs-toggle="modal" data-bs-target="#loginModal" style=" text-decoration:none ; color:red;" href="">Login</a></span></h3>';
        }
    ?>
        <!-- $_SERVER["REQUEST_URI"] -->
        <h3 class="text-center"> <span style="color: wheat;"> Recent Blog </span> </h3>
        <h3 class="glorious text-center d-block m-auto"></h3>
        <div class="gort py-4">
            <?php 
             $sql="SELECT * FROM `thread`";
             $result=mysqli_query($conn,$sql);
             $noResult=true;
             while($row=mysqli_fetch_assoc($result)){
                $noResult=false;
                $id=$row['blog_id'];
                $title=$row['blog_title'];
                $desc=$row['blog_desc'];
                $timestamp=$row['timestamp'];
                $blog_user_id=$row['blog_user_id'];
                $sql2="SELECT username FROM `userval` WHERE sno= '$blog_user_id'";
                $result2=mysqli_query($conn,$sql2);
                $row2=mysqli_fetch_assoc($result2);
          
           echo' <div class="user-time" >
                <a style="text-decoration: none;" href="blog2.php?cat='.$id.'"><p style="color: #ffbf1b;" class=" fx px-4 my-2 font-weight-bold  ">Posted By: <span class="text-light" style="font-weight: bold;"> '. $row2['username'] .' </span>  </p></a>
                <a style="text-decoration: none;" href="blog2.php?cat='.$id.'"><p style="color: wheat;" class="fx px-4 my-2"> at '. $timestamp .'</p></a>
            </div>
            <div class="user-post" >
                <h5 class="px-2 py-2"> <a style="text-decoration: none;" class="text-light" href="blog2.php?cat='. $id .'">'. $title .' </a> </h5>
                <p class="px-2 py-2 text-light"> <a style="text-decoration:none ;" class="text-light" href="blog2.php?cat='. $id .'">'. $desc .'</a></p>
                <a style="text-decoration:none ; color:#00c9ff ;" href="blog2.php?cat='.$id.'"><p style="" class=" text-center"> for comment click <span style="color:wheat; font-size:20px ; font-weight: bold;">here</span></a>
            </div>
            <div class="my-4" style="border: 0.5px solid #e8a6a6; width: 86vw; display: block ; margin: auto;"></div>';
             }
             if($noResult){
                echo '<div class="jumbotron jumbotron-fluid" id="ques">
                <div class="container">
                  <p class="display-4">no thraeds found.</p>
                  <p class="lead"><b> be the first person to ask the question</b>.</p>
                </div>
              </div>';
            }
            ?>
    </section>

    <?php include 'partials/footer.php' ;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>