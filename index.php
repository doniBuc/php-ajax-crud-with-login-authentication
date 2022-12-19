<?php
session_start();
include "./assets/php/login_validation.php";
autoLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <title>Sign in</title>
</head>

<body>
    <!-- Sign In -->
    <form action="index.php" method="post">
        <div class="login-container">
            <div class="box">
                <div class="login-content">
                    <h1>Sign in</h1>
                    <input type="text" name="username" placeholder="Username" class="form-control">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <span class="text-center text-danger"><?php include "./assets/php/login.php" ?></span>
                    <button type="submit" class="btn btn-dark" name="login">Sign in</button>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#signup">Sign up now!</a>
                </div>
            </div>
        </div>
    </form>

    <!-- Sign Up -->
    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signupLabel">Register an Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Sign Up Form -->
                <form action="./index.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>