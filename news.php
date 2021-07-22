<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Love Story---Unfinished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/support.css"> -->
    <style>
    .card {}

    .news img {
        width: 400px;
        border-radius: 20px;
    }
    .news_api{
        width: 50vw;
    }
    @media only screen and (max-width: 450px){
        .news img{
           width:300px ;
        }
        .news_api{
            width:90vw ;
        }
    }
    @media only screen and (max-width: 340px){
        .news img{
            width:238px ;

        }
        .news_api{
            width:90vw;
        }
    }
    </style>
</head>

<body>
    <?php include 'partials/head.php' ;  ?>
    <?php include 'partials/_dbconnect.php' ; ?>
    <section style="background-color:#1f1d1d ;" class="py-4 ">
        <div>
            <h3 class="text-center text-light ">Top News: <span class="badge bg-warning">by indian bbc news</span></h3>
            <div class="news py-4 ">
                <img class="d-block m-auto" src="img/blog.jpg" alt="">
            </div>
            <div class="accordion py-4" id="newsa"></div>
        </div>

    </section>
    <section class="my-0 py-4" style="background: #e6c3c3;">
       <div class="d-block m-auto">
        <h5 class="text-center d-block m-auto news_api">On the above you got the top news of bbc you most follow our insta handler to get the better way of
            knowledge supresing anything,(We have diffrent langauage notes along with news). Hope you Enjoy learning news from this website . good luck
        </h5>
        </div>
    </section>
    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/news.js"></script>
</body>

</html>