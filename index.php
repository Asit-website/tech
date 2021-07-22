<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Love Story---Unfinished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cardslider.css"> 
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/extern.css">
    <style>
        /* *{
            /* padding:0 ;
            margin:0 ;
            left:0 ;
            top: 0px; */
        } *
    .animate__animated.animate__zoomIn {
        --animate-duration: 2s;
    }
    .gorv{
        margin:0px 30px ;
    }

    .gorv:hover {
        display: inline-block;
        margin: 0 0.5rem;

        animation: pulse;
        /* referring directly to the animation's @keyframe declaration */
        animation-duration: 1s;
        /* don't forget to set a duration! */

    }
    .baccha{
        padding:0px 30px ;
    }
    .item {
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin: 0px 40px; */
        }
        .card_item {
            width: 27rem;
            height: auto;
            margin: 0px 0px;
        }

        .card_item img {
            height: 33vh;
        }

    @media only screen and (max-width: 770px) {
        .ram {
            flex-direction: column;
            padding:0px 0px ;
           text-align: center;

        }

        .ram2 {
            flex-direction: column;
        }
        .baccha{
            padding: 0px 0px;
        }
        .secg{
            padding:0px 0px ;
        }
    }
    @media only screen and (max-width:990px) {
       .gorv{
           margin-top:8px ;
       }
    }
    
    @media only screen and (max-width: 351px) {
    #customers-testimonials.owl-carousel .owl-dots{
        width: 57%;
    }
}
@media only screen and (min-width: 800px) (max-width: 1025px){
    .testimonials{
        padding:1rem 0 ;
    }
    .y{
        height:47vh ;
    }
}
@media only screen and (min-width:700px ) and (max-width: 770px){
    .y{
        height:59vh ;
    }
    .testimonials{
        height: 70vh;
    }
}
    </style>
</head>

<body>
    <?php include 'partials/head.php'; ?>
    <?php include 'partials/_dbconnect.php';?>
    <section style="background-color: burlywood;"
        class="py-4  baccha">
        <div class="mysir   baccha">
            <h3 style="color: blueviolet;"
                class="animate__animated animate__zoomIn animate__infinite infinite text-center">Welcome to our website
            </h3>
            <h5 class="text-center">Padega Baccha tavhi to badega Baccha this is fact.</h5>
            <p class="text-center igec px-4">WE are official Information technology students Who share notes .to you
                study
                from
                <span> <a target="_blank" style="text-decoration:none ;" class="sum"
                        href="https://www.igecsagar.ac.in/"> INDRA GANDHI ENGINEERING COLLEGE SAGAR.</span></a>we hope
                you all guys enjoying this website. WE also try to build a strong community through this website must
                follow us on instagram. our insta handler give you a information how to start coding and take
                it to long ways where success is seen by you because oppurinity is boom in coding field.
            </p>
            <h5 class="text-center">Do you want to confess something? <a class="sum" style="text-decoration: none;"
                    href="confesss.php">Confess Section</a></h5>

            <h5 class="text-center">Do you want to read daily news and gain knowledge? than visit <a class="sum"
                    style="text-decoration: none;" href="news.php">news api section</a></h5>
        </div>
    </section>
    <section id="po">
        <div class="container py-4">
            <a class="text-dark" style="text-decoration: none;" href="register.php">
                <h3 class="text-center"><span id="fes">Register Now</span></h3>
            </a>
            <p style=" font-size:18px ; " class="text-center">Browse Our all Events by clicking <a
                    style=" text-decoration: none ;" href="events.php"> <span>here</span> </a></p>
            <section class="carousel slide   py-1" data-ride="carousel" id="postsCarousel">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <a class="btn btn-outline-danger prev" href="" title="go back"><i
                                    class="fa fa-lg fa-chevron-left"></i></a>
                            <a class="btn btn-outline-danger next" href="" title="more"><i
                                    class="fa fa-lg fa-chevron-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="container p-t-0 m-t-2 carousel-inner hir ">
                    <div class="row row-equal carousel-item active m-t-0 ">
                        <?php 
                  $sql="SELECT * FROM `event`";
                  $result=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($result)){
                      $id=$row['event_id'];
                      $title=$row['event_tit'];
                      $desc=$row['event_desc'];
                      echo ' <div class="card  gorv" style="width: 18rem; border-radius: 10px;">
                      <img height="100vh" src="img/code-'. $id .'.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                      <a style="text-decoration: none;" href="evue.php?catid='. $id .'"><h5 class="card-title text-center">'. $title .'</h5></a>
                        <p class="card-text text-center">'. $desc .'</p>
                        <a style="text-decoration: none;"  href="evue.php?catid='. $id .'"><button id="vtn">Click</button></a>
                      </div>
                    </div>';
                  }
              ?>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div style="background-color: rgb(65 45 65);" class="st  py-4">
        <div class="z">
            <section class="ram">
                <div class="secg">
                    <h3 class="text-light py-2">our story</h3>
                    <p class="text-light">We provide love tips in this website .Through This tips you Easly get your
                        loves to see our website
                        .You express an amazing thinking through this website .Through love we provide an unbuilt blog
                        where
                        you ask qusetion regarding this . You can also solve others people doubt by the help of this
                        website
                        .here the integration of the people is so good as you thinking.you can connect with your senior
                        .junior integration </p>
                </div>
                <div class="i_g">
                    <img src="img/blok2.jpg" alt="">
                </div>
            </section>
        </div>
        <div class="y ">
            <section class="ram ram2 ">
                <div class="secg">
                    <h3 class="text-light py-2">our education</h3>
                    <p class="text-light">We provide an unbuilt notes of programming langauage Through this website. I
                        know you guys enjoying
                        with this website Because in this website you integrated with our blog as well as learn
                        programming
                        langauage .we provide notes of html,css,python,c,c++, java.Through this notes you learna approx
                        all
                        programming langauage which you want and solve and see ,Your life and take your carer to a point
                        where You see Yourself as a devloper </p>
                </div>
                <div class="i_g">
                    <img src="img/blok2.jpg" alt="">
                </div>
            </section>
        </div>
    </div>
    <!-- <div class="py-1 slides">
        <section class="container p-t-3 py-1">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center py-2"><span>Programming Notes By</span> <span id="sd"
                            style="color: rgb(235, 35, 35);"> Asit Manadal</span> </h2>
                    <h4 class="text-center py-0">Browse All Notes By clicking
                        <a style="color: #2071fb; text-decoration: none ; outline: none;" id="an" href="notes.php">
                            <span>here</span> </a>
                    </h4>
                </div>
            </div>
        </section>
        <section class="carousel slide py-2" data-ride="carousel" id="postsCarousel">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <a class="btn btn-outline-secondary prev" href="" title="go back"><i
                                class="fa fa-lg fa-chevron-left"></i></a>
                        <a class="btn btn-outline-secondary next" href="" title="more"><i
                                class="fa fa-lg fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="container p-t-0 m-t-2 carousel-inner py-2 ">
                <div class="row row-equal carousel-item active m-t-0">
                    <div class="card fard gorv" style="width:18rem ;">
                        <img src="img/sard-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">C Programm</h5>
                            <p class="card-text text-center">Download Notes for C Langauage.</p>
                            <a class="text-dark" style="text-decoration: none;"
                                href="https://drive.google.com/drive/folders/1kgPd5bKNF-GQBYzQBd0h6VOvgb7Assqn"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                        </div>
                    </div>
                    <div class="card fard gorv" style="width: 18rem;">
                        <img src="img/sard-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">C++ Programm</h5>
                            <p class="card-text text-center">Download Notes for C++ Langauage.</p>
                            <a class="text-dark" style="text-decoration:none;"
                                href="https://drive.google.com/drive/folders/1yF793Ms2RQREGCC49A4zPwtlZNKSHU4r"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                        </div>
                    </div>
                    <div class="card fard gorv" style="width: 18rem;">
                        <img src="img/sard-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Python Programm</h5>
                            <p class="card-text text-center">Download Notes for Python Langauage.</p>
                            <a class="text-dark" style="text-decoration: none;"
                                href="https://drive.google.com/drive/folders/1rWY2qBVed03fxbHOWS1QclDf8lVF5IH4"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                        </div>
                    </div>
                </div>
                <div class="row row-equal carousel-item m-t-0">
                    <div class="card fard gorv" style="width: 18rem;">
                        <img src="img/sard-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Java Programm</h5>
                            <p class="card-text text-center">Download Notes for Java Langauage.</p>

                            <a style="text-decoration:none ;"
                                href="https://drive.google.com/drive/folders/1mHtplMiiw0_GRiC1Mryu024Zs6iAglol"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                        </div>
                    </div>
                    <div class="card fard gorv" style="width: 18rem;">
                        <img src="img/sard-5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Html Programm</h5>
                            <p class="card-text text-center">Download Notes for Html Langauage.</p>
                            <a class="text-dark" style="text-decoration:none ;"
                                href="https://drive.google.com/drive/folders/1fGorxUqa0Sv8eYOXBIoai40mx70lDtbE"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                        </div>
                    </div>
                    <div class="card fard gorv" style="width: 18rem;">
                        <img src="img/sard-6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Css Programm</h5>
                            <p class="card-text text-center">Download Notes for Css Langauage</p>
                            <a class="text-dark" style="text-decoration: none;"
                                href="https://drive.google.com/drive/folders/1MyI1dY1FOJOTrUCNCfiNCZJiYjGMRmbx"><button
                                    class="btn m-auto d-block my-2" id="vtn" style="color: red;">Download
                                    Notes</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->
    <section  class="testimonials">
        <h2 class="text-center py-2"><span class="text-light">Programming Notes By</span> <span id="sd" style="color: rgb(235, 35, 35);">
                Asit Manadal</span> </h2>
        <h4 style="color:wheat ;" class="text-center py-0">Browse All Notes By clicking
            <a style="color: #2071fb; text-decoration: none ; outline: none;" id="an" href="notes.php">
                <span>here</span> </a>
        </h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel ">
                        <!-- testimonials-1 -->
                        <div class="item">
                            <div class="card card_item" style="width:18rem;">
                                <img src="img/sard-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">C programming</h5>
                                    <p class="card-text">Download Notes for c.</p>
                                    <a target="_blank" class="text-dark" style="text-decoration: none;"
                                href="https://drive.google.com/drive/folders/1kgPd5bKNF-GQBYzQBd0h6VOvgb7Assqn"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials-2 -->
                        <div class="item">
                            <div class="card card_item" style="width: 18rem;">
                                <img src="img/sard-2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">C++ Programming</h5>
                                    <p class="card-text">Download Notes for c++</p>
                                    <!-- <a href="#" class="btn btn-primary">Download</a> -->
                                    <a target="_blank" class="text-dark" style="text-decoration:none;"
                                href="https://drive.google.com/drive/folders/1yF793Ms2RQREGCC49A4zPwtlZNKSHU4r"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials-3 -->
                        <div class="item">
                            <div class="card card_item" style="width: 18rem;">
                                <img src="img/sard-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Python Programming</h5>
                                    <p class="card-text">Download Notes for Python.</p>
                                    <!-- <a href="#" class="btn btn-primary">Download</a> -->
                                    <a target="_blank" class="text-dark" style="text-decoration: none;"
                                href="https://drive.google.com/drive/folders/1rWY2qBVed03fxbHOWS1QclDf8lVF5IH4"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials-4 -->
                        <div class="item">
                            <div class="card card_item" style="width: 18rem;">
                                <img src="img/sard-4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Java Programming</h5>
                                    <p class="card-text">Download Notes for Java.</p>
                                    <!-- <a href="#" class="btn btn-primary">Download</a> -->
                                    <a target="_blank" style="text-decoration:none ;"
                                href="https://drive.google.com/drive/folders/1mHtplMiiw0_GRiC1Mryu024Zs6iAglol"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials-4 -->
                        <div class="item">
                            <div class="card card_item" style="width: 18rem;">
                                <img src="img/sard-5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Html Programming</h5>
                                    <p class="card-text">Download Notes for Html</p>
                                    <!-- <a href="#" class="btn btn-primary">Download</a> -->
                                    <a target="_blank" class="text-dark" style="text-decoration:none ;"
                                href="https://drive.google.com/drive/folders/1fGorxUqa0Sv8eYOXBIoai40mx70lDtbE"><button
                                    id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                                    Notes</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card card_item" style="width: 18rem;">
                                <img src="img/sard-6.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Css Programming</h5>
                                    <p class="card-text">Download Notes for Css</p>
                                    <!-- <a href="#" class="btn btn-primary">Download</a> -->
                                    <a target="_blank" class="text-dark" style="text-decoration: none;"
                                href="https://drive.google.com/drive/folders/1MyI1dY1FOJOTrUCNCfiNCZJiYjGMRmbx"><button
                                    class="btn m-auto d-block my-2" id="vtn" style="color: red;">Download
                                    Notes</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    include 'partials/footer.php' ;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/index.js"></script>
    <script src="js/extern.js"></script>

</body>

</html>