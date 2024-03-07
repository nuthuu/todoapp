<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
    <!-- Login Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 formcontainer">
                <h1 class="d-flex justify-content-center mt-5">LOGIN FORM</h1>
                <form method="post" action="assets/backend/auth.php" class="border rounded p-4 border-primary login-form">
                    <div class="mb-3">
                        <label for="login_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="login_email" name="login_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="login_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="login_password" name="login_password" required>
                    </div>
                    <button type="submit" name="login-btn" id="login-btn" class="btn btn-primary">Login</button>
                </form>

                <div class="d-flex justify-content-end">
                    <a href="">Forget Password</a>
                </div>
                <div class="d-flex justify-content-center">
                    Don't have an account ?? <a href="register.php"> Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Login Form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>