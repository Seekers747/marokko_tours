<?php

require "database.php";

class User
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new db_connection();
    }

    public function registerUser($first_name, $last_name, $email, $password, $phone_number)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_info (first_name, last_name, email, password_hash, phone_number) VALUES (:first_name, :last_name, :email, :password_hash, :phone_number)";
        $placeholder = ["first_name" => $first_name, "last_name" => $last_name, "email" => $email, "password_hash" => $password_hash, "phone_number" => $phone_number];
        return $this->pdo->run($sql, $placeholder);
    }

    public function loginUser($email, $password) {
        session_start();

        $sql = "SELECT * FROM user_info WHERE email = ?";
        $stored_info = $this->pdo->run($sql, [$email])->fetch();

        if (!$stored_info) {
            echo "Email bestaat niet!";
            return;
        } elseif (password_verify($password, $stored_info['password_hash'])) {
            $_SESSION['user_id'] = $stored_info['user_id'];
            $_SESSION['first_name'] = $stored_info['first_name'];
            $_SESSION['last_name'] = $stored_info['last_name'];
            $_SESSION['email'] = $email;
            $_SESSION['password_hash'] = $stored_info['password_hash'];
            echo "<p class='popUp'>Login successful!</p>";
            header("refresh:3, url = dashboard.php");
        } else {
            echo "<p class='redPopUp'>Password is incorrect!</p>";
        }
    }

    public function logoutUser()
    {
        session_unset();
        session_destroy();
        header("Location: ../Pagina/login-user.php");
    }

    // public function editUser($voornaam, $achternaam, $telefoonnummer, $geboortedatum, $email)
    // {
    //     $sql = "UPDATE klant
    //             SET voornaam = :voornaam, 
    //                 achternaam = :achternaam, 
    //                 telefoonnummer = :telefoonnummer, 
    //                 geboortedatum = :geboortedatum
    //             WHERE email = :email";

    //     $placeholder = [
    //         "voornaam" => $voornaam,
    //         "achternaam" => $achternaam,
    //         "telefoonnummer" => $telefoonnummer,
    //         "geboortedatum" => $geboortedatum,
    //         "email" => $email
    //     ];

    //     $this->pdo->run($sql, $placeholder);
    // }

    // public function getUserInfo($email)
    // {
    //     $sql = "SELECT voornaam, achternaam, telefoonnummer, geboortedatum FROM klant WHERE email = :email";
    //     $stored_info = $this->pdo->run($sql, ["email" => $email])->fetch();

    //     if (!$stored_info) {
    //         echo "<p class='redPopUp'>Je moet inloggen</p>";
    //     } else {
    //         $_SESSION['voornaam'] = $stored_info['voornaam'];
    //         $_SESSION['achternaam'] = $stored_info['achternaam'];
    //         $_SESSION['telefoonnummer'] = $stored_info['telefoonnummer'];
    //         $_SESSION['geboortedatum'] = $stored_info['geboortedatum'];
    //     }
    // }
}

$User = new User();