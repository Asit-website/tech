<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Love Story---Unfinished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/support.css">
  <style>
    /* span::before{
    animation: asit 2s infinite ease-in-out  ;
    /* padding-left: 10px; */
    /* padding-top: 20px; */
    /* content: ''; */
   /* } */ 
   .secimg img{
     width: 300px;
   }
    @keyframes asit { 
     0%{
       content: 'You Can Find Our';
     }
     25%{
       content: 'Story Here';
     }
     50%{
       content: 'Love Story Here';
     }
     75%{
       content: 'And all Those things';
     }
   } 
   #para{
     animation: asit2 4s ease-in-out infinite;
     font-size:20px ;
   }
   @keyframes asit2 {
     0%{
       color: red;

     }
     20%{
       color: green;
     }
     40%{
      color: yellow;
     }
     60%{
       color: rgb(47, 0, 51);
     }
     80%{
       color: wheat;
     }
     100%{
       color: hotpink;
     }
   }
   .tr img{
     width:100% ;
     height: 30vh;
   }
   .gui{
     background-color: white;
   }
   @media only screen and (min-width: 752px) and (max-width: 768px){
     .divs{
       padding: 0px 30px;
     }
   }

   /* bad mai uper wale ko hata denge */

   @media only screen and (max-width:1112px ){
     #buts .btn{
       width:50% ;
     }
   }
   @media only screen and (max-width: 766px){
     .home{
       flex-direction:column-reverse ;
     }
     .divs{
       padding:0px 0px ;
       text-align:center ;
     }
     .secimg img{
       margin-right: 0px;
      
     }
   }
   @media only screen and (max-width: 341px){
    .secimg img{
       width:239px ;
      
     }
     .divs{
       text-align:center ;
     }
     
     
   }
  
  </style>
</head>

<body>
    <?php include 'partials/head.php' ;  ?>
    <?php include 'partials/_dbconnect.php' ; ?>
        <div class="tr">
         <img src="img/34.jpg" alt="">
      </div>
  <div class="gui">
    <section class="home" >

        <div class="divs">
        <h3 class="textbig" >Our Love<span  id="first_head" ></span>
        <span class="typed-cursor" aria-hidden="true">|</span>
      </h3>

            <p class="textsmall">Here you guys find an unstopable love story of Sona and Asit.
                and you guys enjoy this website.Because this website capture all the images fetching, When we
                meet together on a place,When we read study on class 10 .Hope You all enjoy this.
                This webpage contant a home page as u see ,About page ,We provide you notes
            </p>


            <h1 class="margin text-center py-2" id="para">Can be Support You without paying?</h1>
            <ol type="1">
                <li>Following us on Instagram and Facebook</li>
                <li>Fact About us</li>
                <li>Something great about us</li>
                <li>In Which time we first time mb_internal_encoding</li>
            </ol>
  
            <p id="buts">
                <a class="link" href="contact.php"><button class="btn">Contact us</button></a>
            </p>
        </div>


        <div class="secimg">
          <p style="color: red; font-size: 18px;" class="text-center  my-0">Scan This QR Code</p>
            <img id="mag" src="img/qr.jpg" alt="">

        </div>
    </section>
    

    </div>

  <section class="py-1 my-0 second_section">

  <div class="container my-2">
  <h4 class=" tex my-4 text-dark text-center">People who support us</h4>
 
<table class="table  colo text-center ">
  <thead class="col-md-8">
    <tr class="text-light">
     
      <th scope="col">sno</th>
      <th scope="col">name</th>
    
    </tr>
  </thead>
  <tbody>
    <tr class="text-light">
      <th scope="row">1</th>
      <td class="text-light">Asit</td>
    </tr>
  
  </tbody>
</table>
</div>
</section>
<?php
 include 'partials/footer.php'
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <!-- <script src="js/index.js"></script> -->
</body>

</html>