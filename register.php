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
    body {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;

    }

    .bord input {
        border-radius: 10px;
        border: 2px solid grey;
        font-size: 20px;
    }

    .bord input:hover {
        color: rgb(92, 8, 8);
    }

    .bord textarea {
        border-radius: 10px;
        border: 2px solid grey;
    }

    .logo {
        
    }

    .logo img {
        width: 500px;
        border-radius: 30px;
        height: 600px;
        margin-left: 40px;
        margin-top: 10px;
    }

    .contact {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .v7 {
        border: 0.5px solid #000000;
        width: 700px;
        display: block;
        margin: auto;
    }

    .form-group input {
        border: 1px solid #68f1f2;
        border-radius: 10px;
        font-size: 18px;
    }

    .form-group select {
        border: 1px solid #68f1f2;
        border-radius: 10px;
        font-size: 18px;
    }

    .form-group textarea {
        border: 1px solid #68f1f2;
        border-radius: 10px;
        font-size: 18px;
    }


    .form-group label {
        font-size: 18px;
    }

    .regs {
        background: linear-gradient(169deg, #8869ac, #e60e0e00);
    }
    </style>
</head>
<body>
   <?php include 'partials/head.php' ;?>
   <?php include 'partials/_dbconnect.php';?>
   <?php 
       $shows=false;
       if($_SERVER['REQUEST_METHOD']=="POST") {
           $names=$_POST['name'];
           $emails=$_POST['email'];
           $college=$_POST['college'];
           $sel=$_POST['select'];
           $description=$_POST['description'];
           $shows=true;
           $sql2="INSERT INTO `register` ( `name`, `email`, `college`, `branch`, `description`, `time`) VALUES ( '$names', '$emails', '$college', '$sel', '$description', current_timestamp())";

           $result2=mysqli_query($conn,$sql2);

         if($shows){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong> Success! </strong> Register successfully we soon sent you an email.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
         }
         else{
            echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong> error! </strong> Try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
         }

       }
   ?> 
    <section class="regs py-4">
        <h1 class="text-center py-2">Register Now<span> | </span>Fill The form below</h1>

        <div class="v7"></div>
        <div class="regso d-flex align-items-center justify-content-center">

            <form class="col-md-8" action="/project1/register.php" method="post">
                <div class="form-group my-4">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group my-4">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group my-4">
                    <label for="college">College</label>
                    <input type="text" class="form-control" id="college" name="college"
                        placeholder="Enter Your College Name">
                </div>
                <div class="form-group my-4">
                    <label for="select"> Select Your Branch</label>
                    <select class="form-control" id="select" name="select">
                        <option></option>
                        <option>IT/CS</option>
                        <option>CE</option>
                        <option>ME</option>
                        <option>ECE</option>
                        <option>EE</option>
                        <option>EEE</option>
                        <option>Mining</option>
                    </select>
                </div>

                <div class="form-group my-4">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Submit Your Query"></textarea>
                </div>
                <button class="btn btn-danger">Submit</button>
            </form>

        </div>

    </section>


    <?php  include 'partials/footer.php' ;?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="js/index.js"></script> -->
</body>

</html>