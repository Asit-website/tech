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
    /* .tier {
        padding-left: 80px;
    } */

    .comment {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        padding: 8px 0px;
    }

    .comment_img img {

        width: 200px;
        height: 200px;
        /* height:auto ; */
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        border-radius: 130px;
        /* border:1px solid black ; */
        /* height:30px ; */
    }

    .pt {
        padding: 0 65px;
    }

    .fx {
        text-align: right;
    }

    .recent {
        padding: 0 60px;
    }

    .fecent {
        border: 0.5px solid hotpink;
        width: 320px;
        position: relative;
        bottom: 20px;
    }

    .be_the {
        animation: blog 2s ease-in-out infinite;
        font-size: 18px;
    }

    @keyframes blog {
        0% {
            color: red;
        }

        50% {
            color: violet;
        }

        100% {
            color: green;
        }
    }

    .uy {
        font-weight: bold;
    }

    .need:hover {
        border-style: dotted;
        color: white;

    }

    .di {
        display: flex;
        /* flex-direction: column; */
    }

    .form1 textarea {
        background: white;
    }

    .animate__animated.animate__bounce {
        --animate-duration: 5s;
        --animate-delay: 2s;
    }
    .user-times{
        padding-right:60px ;
    }
    .user-comment{
        padding-left:60px ;
    }
    @media only screen and (max-width:675px){
        .comment{
            flex-direction: column-reverse;
        }
        .tit{
            text-align:center ;
        }
    }
    @media only screen and (max-width:766px){
            .user-times{
                padding-right:0px ;
            }
            .user-comment{
                padding-left: 0px;
            }
            .fecent{
                width: 100%;
            }
            
            
        }
    </style>

</head>

<body>
    <?php include 'partials/head.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php 
         $id=$_GET['cat'];
         $sql="SELECT * FROM `thread` WHERE blog_id=$id";
         $result=mysqli_query($conn,$sql);
       
         while($row=mysqli_fetch_assoc($result)){
           $title=$row['blog_title'];
           $desc=$row['blog_desc'];
           $blog_user_id=$row['blog_user_id'];
           $time=$row['timestamp'];
           // query the users table to find the op
           $sql2="SELECT username FROM `userval` WHERE sno= '$blog_user_id'";
           $result2=mysqli_query($conn,$sql2);
           $row2=mysqli_fetch_assoc($result2);
           $posted_by=$row2['username'];
         }
    ?>
    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $showalert=true;
            $comment=$_POST['comm'];
            $comment=str_replace("<","&lt;",$comment);
            $comment=str_replace(">","&gt;",$comment);
            $sno=$_POST['sno'];
           
            $sql="INSERT INTO `commen` ( `comment_content`, `blog_id`, `comment_by`, `comment_time`) VALUES ('  $comment', '$id', '$sno', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($showalert){
              echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong> Success! </strong> Your comment has been adeed.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        }
    ?>
    <section style="background-color: #cfcbcb;" class="comment  py-1  ">

        <div id="co_mt" class=" pt">
            <h3 class=" tit"> <?php echo $title  ?> </h3>
            <p class="tit"> <?php echo $desc ?></p>
            <p class="tit">Posted By: <span style="font-weight: bold;"> <?php echo $posted_by?> </span> at...
                <?php echo $time ?> </p>
        </div>

        <div class="comment_img">
            <img src="img/comment.jpg" alt="">
        </div>
    </section>

    <section style="background-color: #1f0606;" class="px-2 ">


        <h3 style="color: wheat;" class="recent py-3 text-center  animate__animated animate__zoomIn animate__infinite infinite">Recent
            Comment</h3>
        <!-- <h3 class="recent fecent d-block m-auto"></h3> -->
        <?php 
              $noresult=true;
              $id=$_GET['cat'];
            //   $id=$_GET['cat'];
              $sql="SELECT * FROM `commen` WHERE blog_id=$id"; 
            //   $sql3="SELECT * FROM `reply` WHERE blog_id=$id";
              $result=mysqli_query($conn,$sql);
            //   $result3=mysqli_query($conn,$sql3); 
              while($row=mysqli_fetch_assoc($result)){ 
                //   $row3=mysqli_fetch_assoc($result3);
                $noresult=false;  
                $id=$row['comment_id']; 
                $content=$row['comment_content']; 
                $time=$row['comment_time'];
                $blog_user_id=$row['comment_by'];
                $sql2="SELECT username FROM `userval` WHERE sno= '$blog_user_id'";
                $result2=mysqli_query($conn,$sql2);
                $row2=mysqli_fetch_assoc($result2);
                echo'<div class="py-4">
                <div class="user-times">
                    <a style="text-decoration: none;" href="reply1.php?cata='.$id.'"><p style=" color:hotpink;" class="fx px-4 my-2 ">commented by:<span class="uy text-light">'.$row2['username'].' </span></p></a>
                    <a  style="text-decoration: none;" href="reply1.php?cata='.$id.'"><p style="color: wheat;" class="fx px-4 my-2"> at '. $time .'</p></a>
                </div>
                <div class="user-comment">
                <p class="py-2 di px-2  text-light"> <a style="text-decoration:none ;" class="text-light" href="reply1.php?cata='.$id.'">'. $content .'</a></p>

                <a style="text-decoration:none ; color:#00c9ff ;" href="reply1.php?cata='.$id.'"><p style="" class=" text-center"> for reply click <span style="color:wheat; font-size:20px ; font-weight: bold;">here</span></a>

                </div>
                <div class="my-4" style="border: 0.5px solid #e8a6a6; width: 86vw; display: block ; margin: auto;">
                </div>
            <div>';
                
              }  
              
              if($noresult){
                  echo '<p style="color:hotpink;" class="text-center be_the py-3">Be the first person to comment</p>';
              }
       ?>
        <?php 
                   
                   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
                    echo'<div class="form1 py-4">
                        <h4 class="text-center text-light">Do a Comment</h4>
                        <form action="'. $_SERVER["REQUEST_URI"] .'" method="post" class="col-md-10 d-block m-auto">
                            <div class="form-group">
                                <label class="py-2" for="comm"> <span class="" style="color: white;"> Your Comment</span></label>
                                <textarea class="form-control" id="comm" name="comm" rows="3"></textarea>
                                <input class="di" type="hidden" name="sno" value="'. $_SESSION['sno'] .'">
                            </div>
                            <button type="submit" class="btn btn-danger my-3">Submit</button>
                        </form>
                    </div>';
                   }
                 
                    else{
                        echo ' <h3 class="text-center text-light py-4">You need to be loggedin before starting comment! <span><a data-bs-toggle="modal" data-bs-target="#loginModal" style=" text-decoration:none ; color:red;" href="" class="need">Login now</a></span></h3>';
                    }
                   
                 ?>



    </section>
     
    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="js/index.js"></script> -->
</body>

</html>