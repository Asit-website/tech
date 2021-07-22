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
     .background {
         background: rgba(131, 129, 129, 0.1) url('img/cat2.jpg') ;
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode:darken; 
        /* height: 100vh; */
        /* background: #626262; */
    } 

    .wtn {
        padding: 6px 14px;
        border-radius: 9px;
        cursor: pointer;
        cursor: pointer;
        outline: none;
        border: 1px solid #020202;
        color: #fefffc;
        background: #cf5555;
        font-size: 18px;
    }
    .wtn:hover{
        background-color:grey ;
    }
    .rd img{
        width: 150px;
        /* height: 150px; */
        width: 150px;
    height: 150px;
    /* height: 150px; */
    /* margin-right: 9px; */
    margin-left: 30px;
    margin-top: 10px;
    border-radius: 100px;
    }
    @media only screen and (max-width: 695px){
        #confes{
            flex-direction:column-reverse ;

        }
        .rd img{
            margin-left:0px ;
            margin-top: 20px;
        }
    }
     @media only screen and (min-width: 570px ) and (max-width: 770px){
        /* #confes{
            height:53vh ;
        } */
        #subm{
            height: 41vh;
        }
    } 
    @media only screen and (min-width: 800px) and (max-width: 1200px){
        #subm{
            height: 50vh;
        }
        #confes{
            height:30vh ;
        }
    }
   
    </style>
</head>

<body>
    <?php include 'partials/head.php' ;  ?>
    <?php include 'partials/_dbconnect.php' ; ?>
    <?php 
        $showWrite=false;
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $showWrite=true;
            $desct=$_POST['write'];
            $sql="INSERT INTO `confess` ( `des`, `timestamp`) VALUES ( '$desct', current_timestamp())";
            $result=mysqli_query($conn,$sql);

            if($showWrite){
                echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong> Success! </strong> Your Confession has been added successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                <strong> Error! </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }

        }
    ?>
    <section style="background-color: #4b444c;" id="confes" class="py-4 d-flex align-items-center justify-content-center">
        <div class="py-4 ">
            <h3 class=" text-center text-light">Our Confess Page</h3>
            <h4 class=" text-center text-light">Confess Anonymously <span>|</span> Ab kah vi do dil ki bate</h4>
            <p style="color: rgb(255, 147, 7);" class="text-center"><span>*</span>WE take care of our privacy,You can
                confess here freely!</p>
        </div>
        <div class="rd">
            <img src="img/confess.jpg"  alt="">
        </div>
    </section>
    <section id="subm" class="py-4 d-flex align-items-center justify-content-center background">
        <form class="col-md-10 py-4" action="/project1/confesss.php" method="POST">
            <div class="form-group  ">
                <p style="color: hotpink ;"
                    class="text-center   bfgf animate__animated animate__pulse animate__infinite infinite">Write
                    something...</p>
                <textarea class="form-control" id="write" name="write" rows="3"></textarea>
            </div>
            <button class=" wtn my-3 d-block m-auto">Submit</button>
        </form>
    </section>
    <?php
 include 'partials/footer.php'
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>