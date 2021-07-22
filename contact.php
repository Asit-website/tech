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
         body{
             box-sizing: border-box;
         }
         *{
             margin:0 ;
             padding:0 ;
           
         }
         .bord input{
             border-radius: 10px;
             border: 2px solid grey;
             font-size: 20px;
         }
         .bord input:hover{
             color: rgb(92, 8, 8);
         }
       .bord textarea{
             border-radius: 10px;
             border: 2px solid grey;
         }
         .logo img{
           width: 457px;
           border-radius: 30px;
           height: 600px;
           margin-left:40px ;
           margin-top: 10px;
           /* padding-left: 2px; */
           
           
         }
         .contact{
             display: flex;
             align-items: center;
             justify-content: space-evenly;
         }
         /* @media only screen and (max-width: 1200px){
             .contact{
                 flex-direction:column ;
             }
             .logo img{
                 width: 315px;
                 height:315px ;
                 margin-left:0px ;
                 margin-top:30px ;
             }
         } */
       
        @media only screen and (max-width: 770px){
            .logo img {
                width:286px ;
                padding-left: 80px;
                margin-left:142px ;
                height:520px ;
            }
            .pro{
                margin-right: 114px;
            }
        }
        @media only screen and (max-width: 700px){
            .contact{
                 flex-direction:column ;
             }
             .logo img{
                 width: 315px;
                 height:315px ;
                 margin-left:-69px ;
                 margin-top:30px 
             }
        }
        @media only screen and (min-width:1000px ) and (max-width:1025px){
     
         .contact{
             height: 64vh;
         }
    }
     </style>   
</head>
<body>
    <?php include 'partials/head.php' ;?>
    <?php include 'partials/_dbconnect.php' ;?> 
    <?php 
    // $showerror=false;
     if($_SERVER['REQUEST_METHOD']=="POST"){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $gender=$_POST['gender'];
       $desc=$_POST['desc'];
    //  $showerror=true;
       $sql="INSERT INTO `contact` ( `name`, `email`, `phone`, `gender`, `description`, `times`) VALUES ( '$name', '$email', '$phone', '$gender', '$desc', current_timestamp())";
       $result=mysqli_query($conn,$sql);
       if($result){
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
        <strong> success! </strong> Your form has been filled.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       }  
       else{
           echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
           <strong>success!</strong>Your form has been filled.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
       }  
}
?>
     <section class="my-0 sect">
         <h3 class="py-4 my-0 text-center colr">Contact Us</h3>
     </section>
     <section class="my-0 contact">
         <div class="logo">
             <img src="img/3.jpg"  alt="">
         </div>
         <div class="container my-0 py-4 col-md-6 pro">
     <form action="/project1/contact.php" method="post" >
            <div class="form-group my-2 bord">
                <label for="name">Name</label>
                <input placeholder="Enter your Name" type="text" class="form-control text-center" id="name" name="name" aria-describedby="emailHelp">
               
            </div>

            <div class="form-group my-2 bord">
                <label for="email">Email</label>
                <input placeholder="Enter Your Email" type="email" class="form-control text-center" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-2 bord">
                <label for="phone">Phone</label>
                <input placeholder="Enter Your Phone" type="text" class="form-control text-center" id="phone" name="phone" aria-describedby="emailHelp">
               
            </div>
            <div class="form-group my-2 bord">
                <label for="phone">Gender</label>
                <input placeholder="Enter Your Gender" type="text" class="form-control text-center" id="gender" name="gender" aria-describedby="emailHelp">
            
               
            </div>


            <div class="form-group my-2 bord">
                <label for="desc">Description</label>
                <textarea placeholder="Eleborate Your Concern" class="form-control text-center" name="desc" id="desc" cols="30" rows="10"></textarea>

            </div>

            <button type="submit" class="btn btn-primary mt-3" id="sun">Submit</button>
        </form>

    </div>
    </section>
    <?php  include 'partials/footer.php' ;?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>