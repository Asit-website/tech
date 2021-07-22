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
     @import url('https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap');
     #sectro{
       display: flex;
       align-items: center;
       justify-content:space-evenly;
       padding:8px 0px ;
       
     }
     p{
       padding:1px 50px ;
     }
     .img_abc img{
        width: 240px;
        height:auto ;
        margin-top:50px ;
        margin-right:30px ;
        border-radius:130px ;
        border:1px solid black ;
     }
     .ab{
       padding: 0px 50px;
     }
     .fr{
       background-color: #7f37d1;;
     }
     #btn{
       padding-left: 35px;
     }
     #btn .btn_sm{
      padding: 3px 16px;
    margin: 0px;
   
    border: 2px solid grey;
    border-radius: 10px;
    cursor: pointer;
    font-size: 20px;
    background-color: navajowhite;
     background:none ;
     font-family: 'Baloo Tammudu 2', cursive;
     /* font-size: 20px; */
     }
     #btn .btn_sm:hover{
       background-color:hotpink ;
     }
     #btn .btn_lm{
      padding: 3px 16px;
    margin: 0px;
   
    border: 2px solid grey;
    border-radius: 10px;
    cursor: pointer;
    font-size: 20px;
    background-color: navajowhite;
    font-family: 'Baloo Tammudu 2', cursive;
   
     }
     #btn .btn_lm:hover{
       background-color:white ;
     }
 
    #community{
      display: flex;
      align-items:center ;
      justify-content: space-evenly;
      padding:50px 0px ;
      background-color: wheat;
    }
    #im_g img{
      width:180px;
      height: auto;
      margin-top:10px ;
      margin-right:30px ;
      height:25vh ;
      border:1px solid white ;
      border-radius:30px ;
      
    }
    .inta{
      padding:0px 50px ;

    }
    .coni{
      display:flex ;
      align-items: center;
      justify-content:center ;
      padding: 10px;

    }
    .coni:first-child{
      border-radius: 30px;
    }
    .family{
      font-family: 'Baloo Tammudu 2', cursive;
    }
    .sp{
      text-align: center;
    }
    @media only screen and (max-width: 750px) {
      #sectro{
        flex-direction: column-reverse;
      }
      p{
        padding: 0px 8px;
        text-align:center ;
      }
      #im_g img{
        width:110px ;
        margin-right:25px ;
      }
      .inta{
        padding:0px 0px ;
      }
      .family{
        text-align: center;
      }
      .ab{
            text-align: center;
      }
      .img_abc img{
        margin-right: 0px;
        margin-top: 10px;
      }
    }
    @media only screen and (min-width:1000px ) and (max-width:1025px){
      #sectro{
        padding:50px 0px ;
      }
    }
    @media only screen and (max-width: 351px) {
      #community{
        flex-direction:column-reverse ;
      }
      #im_g img{
        width:110px ;
        margin-right:-2px ;
        margin:17px 0px ;
      }
    }
    
   </style>
</head>
<body>
  <?php include 'partials/head.php' ;  ?>
  <?php  include 'partials/_dbconnect.php' ; ?> 
   <div class="fr">
   <section id="sectro">
     <div class="head_ab">
     <h2 class="py-3 ab text-light">About us</h2>
       <p class="P_small text-light">Here We show How a Love Story Begin with a bright small and how you can fight from socail People and
           the entire city aur world we show this now.I hope You Guys love This Love Story.Because You Guys Looking From This Website How You Fight against socality Kingdom To a Path Where You looking for Success
       </p>
       <p class="P_small text-light">We will Provide a huge notes in this website like Programing skill qualification factor hindi,english
         with love story You guys will also be educated through this website . You dont have to go anywhere
         to being educated ,you also learn good skills through my comunity
       </p>
       <p  class="P_small text-light">You guys also visit my insta page to see more informative memes and coding related things.i will try to solve your queries through this website </p>
     </div>
     <div class="img_abc">
        <img src="img/5.jpg"  alt="">
     </div>
   </section>
     <div id="btn" class="my-0 py-3">
    <a href="support.php"><button class="btn_lm"> <span class="sp">Support</span> </button></a>
    <a href="contact.php"><button class="btn_sm"> <span class="sp"> contact</span></button></a>
    </div>
   </div>

   <section id="community">
   
     <div class="inta">
      <h2 class="py-1 family">Do You Want To Join Our Instagram?</h2>
      <h3 class="py-0 text-center family">Follow Us On</h3>
      <div class="coni">
      <a target="_blank" href="https://www.instagram.com/asitmandal7488/"><img  id="im1" class="mx-2" src="img/10.jpg" width="67" alt=""></a>
      <a target="_blank" href="https://www.facebook.com/"><img  id="im2" class="mx-2" src="img/8.jpg" width="60" alt=""></a>
      </div>
     </div>

     <div id="im_g">
      <img src="img/S2.jpg" alt="">
     </div>
   </section>

 
  <?php include 'partials/footer.php' ;?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <!-- <script>
       let im1=document.getElementById('im1');
       im1.addEventListener('click',()=>{
          window.location.href="https://www.instagram.com/asitmandal7488/";
       })

       let im2=document.getElementById('im2');
       im2.addEventListener('click',()=>{
        window.location.href="https://www.facebook.com";
       })
     </script> -->
</body>

</html>