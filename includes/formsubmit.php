<?php

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    require_once("../users.php");
    require_once("../register.php");

    $register = new Register($username, $email, $password, $cpassword);
    $register->signUp();

    header("Location: ../thankyou.php");
}
