<?php

require "../data/user.php";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     try {
//         $user = new User();
//         $user->registerUser($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['phone_number']);
//         header("refresh:3; url = login.php");
//     } catch (\Exception $e) {
//         echo $e->getMessage();
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compact Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/reg-log.css">
        <link rel="stylesheet" href="../css/general.css">
        <style type="text/css">.empty_space {height: 10px;}</style>
    </head>

    <body>
        <nav class="navbar-adjustment">
            <p>Website logo/name</p>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../html/main-pages/home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/main-pages/over-ons.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/main-pages/hoe-het-werkt.html">How it works</a>
                </li>
            </ul>
            <div class="log-reg">
                <button type="button" class="btn btn-primary"><a href="login.php" class="login-button">Login</a></button>
                <button type="button" class="btn btn-primary"><a href="register.php" class="signup-button">Sign up</a></button>
            </div>
        </nav>
        <div class="body_for_form">
            <div class="form-box">
                <h2>Login</h2>
                <form method="POST">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                    </div>
                    <div class="empty_space"></div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                    </div>
                    <div class="empty_space"></div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
