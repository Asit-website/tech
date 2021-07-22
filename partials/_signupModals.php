<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="stylesheet" href="css/signupmodals.css">
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content my-0">
            <div class="modal-header my-0">
                <h5 class="modal-title d-block m-auto sad animate__animated animate__heartBeat animate__infinite infinite" id="exampleModalLabel">Signup to Our Website</h5>
                <button type="button" class="btn-close btn-danger rsd" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
               <div class="hogo py-4 my-0">
                <img src="img/signup.jpg" alt="nothing">
            </div>
            <form action="/project1/partials/_handleSignup.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">username</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">                   
                    </div>
                    <div class="mb-3">
                        <label for="signupPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPass" name="signupPass">
                    </div>
                    <div class="mb-3">
                        <label for="signupcPass" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPass" name="signupcPass">
                    </div>
                    <button class="signBtn">Signup</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>    
                </div>
            </form>
        </div>
    </div>
</div>