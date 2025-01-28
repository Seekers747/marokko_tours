<?php

session_start();
require "../data/user.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welkom <?php echo $_SESSION['first_name'] ?>!</h1>
</body>
</html>