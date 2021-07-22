<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Love Story---Unfinished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <style>
        #search input {
            /* text-align: center; */
            /* text-align: center; */
            padding: 6px 9px;
            border-radius: 10px;
            /* border: 2px solid; */
            border: 2px solid #aaaaaa;
            margin: 3px;
            font-size: 18px;
            outline: none;
            background-color: white;
            width: 60vmin;
        }

        #search input:hover {
            background-color: rgb(81, 138, 190);
        }

        #search span img {
            width: 30px;
            margin-left: -44px;
            margin-top: 0px;

        }

        .ml {
            margin-left: 9px;
        }

        .notes-card {
            width: 22rem;
            height: auto;
            margin: 20px 10px;
        }

        /* .card:hover {
            transition: top .3s ease 0s;
            text-align: center;
            box-shadow: 0 0 11px rgb(33 33 33 / 30%);
            position: relative;
            top: 0px;
        } */

        .notes-card img {
            height: 33vh;
        }

        #vtn {
            padding: 4px 25px;
            display: block;
            margin: auto;
            border: 2px solid hotpink;
            border-radius: 10px;
            cursor: pointer;
            outline: none;
            color: #2e9bf2;
            background: rgb(212, 169, 253);
            font-size: 18px;
        }

        #vtn:hover {
            background-color: cyan;
        }

        #sengu {
            background: linear;
            background: linear-gradient(rgb(230, 94, 94), rgb(182, 109, 109), tomato);
            height: 60rem;
        }

        .gorv:hover {

            display: inline-block;
            margin: 0 0.5rem;

            animation:bounce;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration:1s;
            /* don't forget to set a duration! */
        }

        @media only screen and (max-width:769px) {
            .notes-card{
                width: 15rem;
            }
        }
        /* @media only screen and (max-width:281px) {
            .fr{
                height: 30vh;
            }
        } */

        /* for ipad pro  */
        @media only screen and (max-width: 1200px) {
            #sengu{
                height:150rem ;
            }
        }

        /* for phone  */
        @media only screen and (max-width: 450px){
            #sengu{
                height:170rem ;
            }
        }

        /* this for surface due  */
        @media only screen and (min-width: 452px) and (max-width: 600px){ 
            #sengu{
                height:100rem ;
            }
        }

        /* for i pad  */
        @media only screen and (min-width: 610px ) and (max-width:900px){
           #sengu{
               height: 120rem;
           }
        }
       
    </style>

</head>

<body>
    <?php include 'partials/head.php' ;?>
    <?php include 'partials/_dbconnect.php' ;?>
    <section id="sengu" class="my-0">
        <div class="search py-4 my-0 text-center">
            <h3 class="ml text-light">Notes Section</h3>
            <div id="search">

                <input type="search" id="sea" placeholder="Search Notes" onkeyup="searchProduct()">
                <span> <img src="img/se.jpg" alt=""> </span>
            </div>
        </div>
        <div id="card-lists" class="container my-0 ">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="card notes-card gorv">
                    <img src="img/sard-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">C Programm</h5>
                        <p class="card-text text-center">Download Notes for C langauage</p>
                        <a target="_blank" class="text-dark" style="text-decoration: none;"
                            href="https://drive.google.com/drive/folders/1kgPd5bKNF-GQBYzQBd0h6VOvgb7Assqn"><button
                                id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                            </button></a>
                    </div>
                </div>

                <div class="card notes-card gorv">
                    <img src="img/sard-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">C++ Programm</h5>
                        <p class="card-text text-center">Download Notes for C++ langauage</p>
                        <!-- <a href="" class="btn btn-primary">Download</a> -->
                        <a target="_blank" class="text-dark" style="text-decoration:none;"
                            href="https://drive.google.com/drive/folders/1yF793Ms2RQREGCC49A4zPwtlZNKSHU4r"><button
                                id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                            </button></a>
                    </div>
                </div>

                <div class="card notes-card gorv">
                    <img src="img/sard-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Python Programm</h5>
                        <p class="card-text text-center">Download Notes for Python langauage</p>
                        <a target="_blank" class="text-dark" style="text-decoration: none;"
                            href="https://drive.google.com/drive/folders/1rWY2qBVed03fxbHOWS1QclDf8lVF5IH4"><button
                                id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                            </button></a>
                    </div>
                </div>

                <div id="car" class="card notes-card gorv">
                    <img src="img/sard-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Java Programm</h5>
                        <p class="card-text text-center">Download Notes for java langauage</p>
                        <a target="_blank" style="text-decoration:none ;"
                            href="https://drive.google.com/drive/folders/1mHtplMiiw0_GRiC1Mryu024Zs6iAglol"><button
                                id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                            </button></a>
                    </div>
                </div>
                <div class="card notes-card gorv">
                    <img src="img/sard-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Html5 Programm</h5>
                        <p class="card-text text-center">Download Notes for HTml5 langauage</p>
                        <a target="_blank" class="text-dark" style="text-decoration:none ;"
                            href="https://drive.google.com/drive/folders/1fGorxUqa0Sv8eYOXBIoai40mx70lDtbE"><button
                                id="vtn" class="btn m-auto d-block my-2" style="color: red;">Download
                            </button></a>
                    </div>
                </div>

                <div class="card notes-card gorv">
                    <img src="img/sard-6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Css Programm</h5>
                        <p class="card-text text-center">Download Notes for Css langauage</p>
                        <a target="_blank" class="text-dark" style="text-decoration: none;"
                            href="https://drive.google.com/drive/folders/1MyI1dY1FOJOTrUCNCfiNCZJiYjGMRmbx"><button
                                class="btn m-auto d-block my-2" id="vtn" style="color: red;">Download
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php  include 'partials/footer.php' ;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="js/notes.js"></script>
  
</body>

</html>