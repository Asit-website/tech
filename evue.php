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
    .cot {
        background-color: #e9fbd6;
        ;
    }

    .femo {
        animation: love 2s infinite ease-in-out;
    }
    #demo{
        text-align: center;
        font-size: 60px;
        margin-top: 0px;
    }

    @keyframes love {
        0% {
            color: blueviolet;
        }

        20% {
            color: rgb(0, 107, 89);
        }

        40% {
            color: hotpink;
        }

        60% {
            color: hsl(red, pink, lightness);
        }

        80% {
            color: yellow;
        }

        100% {
            color: brown;
        }
    }

    .codeImg img {
        width: 200px;
        height: 200px;
        border: 1px solid white;
        border-radius: 200px;
        margin-left: 20px;
        margin-top: 25px;
    }

    .love-events {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;
    }

    .lefta {
        margin-right: 40px;
    }

    .rohit {
        position: relative;
    }

    .rohit::before {
        content: "";
        position: absolute;
        background: url('img/dark.jpg') center center/cover no-repeat;
        top: 0px;
        left: 0px;
        height: 100%;
        width: 100%;
        opacity: 0.9;
        z-index: -1;
    }

    .evu {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .ramji{
        width: 50vw;
    }
    .sitaji{
        display:flex ;
        align-items: center;
        justify-content:center ;
    }

    @media only screen and (max-width: 769px) {
        .evu {
            flex-direction: column-reverse;
        }

        .codeImg img {
            margin-left: 0px;
            margin-top: 8px;
            display: block;
            margin: auto;
        }

        .love-events {
            flex-direction: column-reverse;
        }

        .lefta {
            margin-right: 0px;
            margin-top: 8px;
        }
    }
    @media only screen and (max-width: 542px) {
        .ramji{
            width:100vw ;
        }
        .sitaji{
            flex-direction: column;
        }
    }
    </style>
</head>

<body>
    <?php include 'partials/head.php' ;?>
    <?php include 'partials/_dbconnect.php' ;?>
    <?php 
        $id=$_GET['catid'];
        $sql="SELECT * FROM `event` WHERE event_id=$id";
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($result)){

            $title=$row['event_tit'];
            $desc=$row['event_desc'];
        }
    ?>
    <div class="cot">
        <section class="evu py-4">
            <div class="ev py-2 ">
                <h3 class="text-center"> Our Coding
                    <?php echo $title ; ?>
                </h3>
                <ul class="py-2">
                    <li>You have given 5 question (1 Marks Each).</li>
                    <li>You have to complete this test within 1 Hours.</li>
                    <li>Do not try to google answers,copied answers will be rejected (We understand which code is copied
                        and which is not).</li>
                    <li>You can use any programming language.</li>
                    <li> Try to minimize time complexity and space complexity,in case of draw winner will be selected on
                        that base.</li>
                    <li>Happy Coding!</li>
                </ul>
            </div>

            <div class="codeImg">
                <img src="img/tr.jpg" alt="">
            </div>

        </section>

        <div class="py-4">
            <h3 class="text-center">Event will be live in</h3>
            <p style="font-size: 30px; color: red;" class="  text-center" id="demo"></p>
        </div>
    </div>


    <div style="background:#968080 ;" class="loaf">
        <section class="love-events py-4 ">
            <div class="lov py-2">
                <h3 class="text-center text-light"> Our Love
                    <?php echo $title ; ?>
                </h3>

                <ul class="text-light py-2">
                    <li>It is a love section.</li>
                    <li>We conduct a test regarding love life.</li>
                    <li>You have given 5 question (1 Marks Each).</li>
                    <li>You just share your experience about love.</li>
                    <li>We decide answers regarding your given answers.</li>
                    <li>Answers will be uploaded on our own website.</li>
                    <li>Be Enjoy love life....</li>
                    <li>Do not try to google answers,copied answers will be rejected (We understand which code is
                        copied.</li>
                </ul>
            </div>
            <div class="codeImg lefta">
                <img src="img/love.jpg" alt="">
            </div>
        </section>
        <div class="py-4">
            <h3 class="text-center">Event will be live in</h3>
             <p style="font-size: 30px; color: #ff00f0;" class=" femo text-center" id="fal"></p>
        </div> 
    </div>
    <section class="px-4 py-3 rohit ">
        <div class="px-4 sitaji  py-2">
            <h4 style=" color: wheat;" class="px-4 ramji   text-center  ">You must login before accessing quiz (Your
                username and password has been sent to your email). if you are facing any problem regarding login or
                quiz,contact us on our instagram handler ASAP.</h4>
        </div>
    </section>
    <?php  include 'partials/footer.php' ;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="js/evue.js"></script> -->
    <script>
        var countDownDate = new Date("august 25, 2021 15:37:25").getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById('demo').innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('demo').innerHTML = "EXPIRED";
  }
}, 1000);
var countDownDate = new Date("august 30, 2021 15:37:25").getTime();

var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();

// Find the distance between now and the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Display the result in the element with id="demo"
document.getElementById('fal').innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";

// If the count down is finished, write some text
if (distance < 0) {
  clearInterval(x);
  document.getElementById('fal').innerHTML = "EXPIRED";
}
}, 1000);
    </script>
  

</body>

</html>