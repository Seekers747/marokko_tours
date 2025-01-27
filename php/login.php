<?php

require "../data/user.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $user = new User();
        $user->loginUser($_POST['email'], $_POST['password']);
        header("refresh:3; url = login.php");
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compact Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/general.css">
        <link rel="stylesheet" href="../css/reg-log.css">

    </head>

    <body>
        <nav class="navbar-adjustment">
            <p>Website logo/name</p>
            <ul class="nav nav-pills nav-spacing">
                <li class="nav-item">
                    <a class="nav-link button-nav" aria-current="page" href="../html/main-pages/home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button-nav" href="../html/main-pages/over-ons.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button-nav" href="../html/main-pages/hoe-het-werkt.html">How it works</a>
                </li>
            </ul>
            <div class="log-reg">
                <button type="button" class="btn button-nav-active button-nav"><a href="login.php" class="login-button">Login</a></button>
                <button type="button" class="btn button-nav-active button-nav"><a href="register.php" class="signup-button">Sign up</a></button>
            </div>
        </nav>
        <div class="body_for_form">
            <div class="form-box">
                <h2>Login</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="******" required>
                    </div>
                    <button type="submit" class="btn button-nav-active button-nav w-100">Submit</button>
                </form>
            </div>
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
