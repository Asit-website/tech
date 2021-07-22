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
    .pyar {
        padding: 0 65px;
    }

    .reply_img img {
        width: 200px;
        height: 200px;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        border-radius: 130px;
    }

    .reply {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .fx {
        text-align: right;
    }

    .reply_login:hover {
        border-style: dotted;
    }
    .di{
        /* padding:0px 65px ; */
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
    .user-timesa{
        padding-right:60px ;
    }
    .user-rep{
        padding-left: 60px;
    }
    @media only screen and (max-width:675px){
     .reply{
         flex-direction:column ;
     }
     .reply-post {
         text-align: center;
     }
    }
    @media only screen and (max-width:766px){
            .user-timesa{
                padding-right:0px ;
            }
            .user-rep{
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
        $id=$_GET['cata'];
        $sql="SELECT * FROM `commen` WHERE comment_id=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $comment_tit=$row['comment_content'];
            $bloga_usera_id=$row['comment_by'];
            $timesa=$row['comment_time'];
            // query the users table to find the op
            $sql2="SELECT username FROM `userval` WHERE sno= '$bloga_usera_id'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            $commented_by=$row2['username'];
          }
    ?>
    <?php 
           if($_SERVER['REQUEST_METHOD']=='POST') {
            $showalert=true;
            $reply=$_POST['reply'];
            $reply=str_replace("<","&lt;",$reply);
            $reply=str_replace(">","&gt;",$reply);
            $sno=$_POST['sno'];
            $sql="INSERT INTO `reply` ( `reply_content`, `comment_id`, `reply_by`, `reply_time`) VALUES ('$reply', '$id', '$sno', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($showalert){
              echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong> Success! </strong> Your reply has been adeed.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        } 
    ?>

    <section style="background-color:#290e2d;" class="reply  py-2  ">

        <div id="" class="pyar">
            <p style="color: wheat ;" class="reply-post "><?php echo $comment_tit ?></p>
            <p class="text-light reply-post">commented By: <span style="font-weight: bold;"> <?php echo $commented_by ?> </span>
                at... <?php echo $timesa   ?></p>
        </div>

        <div class="reply_img">
            <img src="img/reply.jpg" alt="">
        </div>
    </section>
    <section style="background-color: #140101;" class="px-4 ">
        <h3 style="color: wheat;"
            class="recent py-3 text-center  animate__animated animate__zoomIn animate__infinite infinite">
            Recent Reply
        </h3>
        <h3 class="recent fecent"></h3>
        <?php 
      $noresult=true;
      $id=$_GET['cata'];
      $sql="SELECT * FROM `reply` WHERE comment_id=$id"; 
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){ 
        $noresult=false;  
        $id=$row['reply_id']; 
        $reply_con=$row['reply_content']; 
        $reply_time=$row['reply_time'];
        $reply_user_id=$row['reply_by'];
        $sql2="SELECT username FROM `userval` WHERE sno= '$reply_user_id'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        echo'<div class="py-4">
        <div class="user-timesa">
            <p style=" color:pink; font-weight:bold ;" class="fx px-2 my-2 ">reply by:<span class="uy text-light">'.$row2['username'].' </span></p>
            <p style="color: wheat;" class="fx px-2 my-2"> at '. $reply_time .'</p>
        </div>
        <div class="user-rep">
        <p  class="py-2 di   text-light"> '. $reply_con .'</p>
        </div>
        <div class="my-4" style="border: 0.5px solid #e8a6a6; width: 86vw; display: block ; margin: auto;">
        </div>
    <div>';
        
      }  
      
      if($noresult){
          echo '<p style="color:hotpink;" class="text-center be_the py-3">Be the first person to reply</p>';
      }
?>
        <div py-2>
            <img class="d-block m-auto py-4" style="width:200px ; height:200px ; border-radius:200px;" src="img/reply4.jpg" alt="">
        </div>
        <?php 
           
           if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
            echo'<div class="form1 py-4">
                <h4 class="text-center text-light" >Reply Here <span style="color : red;" onclick="toggleHide()"  id="bsn"> Click here for hide  </span></h4>
              
                <form  action="'. $_SERVER["REQUEST_URI"] .'" method="post" class="col-md-10 d-block m-auto">
                    <div class="form-group">
                        <label class="py-2" for="comm"> <span class="" style="color: white;">Reply</span></label>
                        <textarea id="laravel" class="form-control" id="reply" name="reply" rows="3"></textarea>
                        <input class="di" type="hidden" name="sno" value="'. $_SESSION['sno'] .'">
                    </div>
                    <button type="submit" class="btn btn-danger my-3">Submit</button>
                </form>
            </div>';
           
           }
         
            else{
                echo ' <h3 class="text-center text-light py-4 my-0">You need to be loggedin before  reply comment! <span><a class="reply_login" data-bs-toggle="modal" data-bs-target="#loginModal" style=" text-decoration:none ; color:red;" href="" class="need">Login now</a></span></h3>';
            }
           
         ?>



    </section>

    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

  


</body>

</html>
