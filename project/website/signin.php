<?php
include_once('header.php');
?>


    
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Sign In</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

   

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                
				<div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Username</label>
                        <input type="text" class="form-control mt-1" id="name" name="username" placeholder="User Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Password</label>
                        <input type="password" class="form-control mt-1" id="email" name="password" placeholder="Password">
                    </div>
                </div>
				
               
                <div class="row">
					<div class="col-md-2 text-start mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Sign IN</button>
                    </div>
					<div class="col-md-10 text-end mt-2">
                        <a href="signin.php">Not register then Signup Here</a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

   <?php
   include_once('footer.php');
   ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>