<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="stylesheet" href="css/loginmodals.css">
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-block m-auto sad animate__animated animate__heartBeat animate__infinite infinite" id="exampleModalLabel" >Login to our website</h5>
                <button type="button" class="btn-close btn-danger rsd" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="hogo py-4 my-0">
                <img src="img/signup.jpg" alt="nothing">
            </div>
            <form action="/project1/partials/_handleLogin.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="loginName" class="form-label">username</label>
                        <input type="text" class="form-control" id="loginName" name="loginName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="loginpass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginpass" name="loginpass">
                    </div>
                    <button class="signBtn">Login</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>