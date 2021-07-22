<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Love Story---Unfinished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/contact.css"> -->
    <style>
  


    .ml {
        /* margin-left: 9px; */
    }

    .notes-card {
        width: 18rem;
        height: auto;
        margin: 20px 10px;
        background-color: #853e3e
    }

    .card:hover {
        transition: top .3s ease 0s;
        text-align: center;
        box-shadow: 0 0 11px rgb(33 33 33 / 30%);
        position: relative;
        top: 0px;
    }

    .notes-card img {
        height: 33vh;
    }

    #sengu {
        background: linear;
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
        /* margin: 0px 3px; */
    }

    #vtn:hover {
        background-color: cyan;
    }

    .cd {
        background: linear-gradient(180deg, #81e2e0, #aee9ec00);
    }

    .hide {
        display: block;
    }

    #rtn:hover {
        display: inline-block;
        margin: 0 0.5rem;

        animation: pulse;
        /* referring directly to the animation's @keyframe declaration */
        animation-duration: 1s;
        /* don't forget to set a duration! */
    }
    .dfg{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    @media only screen and (min-width:1000px ) and (max-width:1025px){
      .cd{
        height:71vh;
      }
    }
    @media only screen and (max-width: 351px) {
     .dfg{
         flex-direction:column ;
     }
     .notes-card{
         width: 15rem;
     }
    }
    </style>
</head>

<body>
    <?php include 'partials/head.php' ;?>
    <?php include 'partials/_dbconnect.php' ;?>
    <section class="cd py-4">
        <div class="x py-4">
            <div class="  dfg">
                <?php  
       $sql="SELECT * FROM `event`";
       $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['event_id'];
        $title=$row['event_tit'];
        $desc=$row['event_desc'];
          echo'<div id="rtn" class="card     notes-card" style=" border-radius: 10px;">
                    <img src="img/code-'.$id.'.jpg" class="card-img-top" alt="code better">
                    <div class="card-body">
                    <a style="text-decoration: none;" href="evue.php?catid='.$id.'"><h5 class="card-title text-center text-light">'. $title .'</h5></a>
                      <p class="card-text text-center text-light">'.$desc.'</p>
                      <a style="text-decoration: none;" href="evue.php?catid='.$id.'"><button id="vtn">Click</button></a>
                    </div>
                  </div>';
       }
    ?>
            </div>
        </div>
    </section>

    <?php  include 'partials/footer.php' ;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
   

</body>

</html>