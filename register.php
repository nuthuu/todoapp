<!-- signup form -->

<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 formcontainer ">
                <h1 class="d-flex justify-content-center mt-5">SIGNUP FORM</h1>
 
                <form method="post" action="assets/backend/auth.php" class="border rounded p-4 border-primary login-form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="mb-3">
                        <label for="c_password" class="form-label">Confirm Password</label>
                        <input type="text" class="form-control" id="c_password" name="c_password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" id="signup-btn" name="signup-btn" class="btn btn-primary d-flex justify-content-center">Sign Up</button>
                </form>
                <div class="d-flex justify-content-center">
                    Already have an account ?? <a href="index.php"> Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ./Signup Form -->
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>