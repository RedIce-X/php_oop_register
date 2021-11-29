<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "logintest";

// $errors = [];
// function register()
// {
//     global $errors;
//     if ($_SERVER["REQUEST_METHOD"] === "POST") {
//         global $connection;
//         if (empty($_POST["username"])) {
//             $errors["username"] = "Username is required";
//         } else {
//             $username = trim(mysqli_real_escape_string($connection, $_POST["username"]));

//             $query = "SELECT username FROM users WHERE username='$username'";
//             $result = mysqli_query($connection, $query);

//             if (!$result) {
//                 die("Query Failed: " . mysqli_error($connection));
//             } else {
//                 if (mysqli_num_rows($result)) {
//                     $errors["username"] = "This username already exists";
//                 }
//             }
//         }

//         if (empty($_POST["email"])) {
//             $errors["email"] = "Email is required";
//         } else {
//             $email = trim(mysqli_real_escape_string($connection, $_POST["email"]));
//             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//                 $errors["email"] = "Invalid email format";
//             } else {
//                 $query = "SELECT email FROM users WHERE email='$email'";
//                 $result = mysqli_query($connection, $query);
//                 if (!$result) {
//                     die("Query Failed: " . mysqli_error($connection));
//                 } else {
//                     if (mysqli_num_rows($result)) {
//                         $errors["email"] = "This email already exists";
//                     }
//                 }
//             }
//         }

//         if (empty($_POST["password"])) {
//             $errors["password"] =  "Password is required";
//         } else {
//             $password = mysqli_real_escape_string($connection, $_POST["password"]);
//             if (strlen($password) < 4) {
//                 $errors["password"] =  "Password must be at least 4 characters";
//             }
//         }

//         if (empty($_POST["cpassword"])) {
//             $errors["cpassword"] =  "Confirm password is required";
//         } else {
//             $cpassword = mysqli_real_escape_string($connection, $_POST["cpassword"]);
//             if ($password !== $cpassword) {
//                 $errors["cpassword"] =  "Password confirmation does not match password";
//             }
//         }

//         if (empty($errors)) {
//             $password = password_hash($password, PASSWORD_BCRYPT);

//             $query = "INSERT INTO users(username, email, password) ";
//             $query .= "VALUES ('$username', '$email', '$password')";

//             $result = mysqli_query($connection, $query);

//             if (!$result) {
//                 die("Query Failed: " . mysqli_error($connection));
//             } else {
//                 header("Location: thankyou.php");
//             }
//         }
//     }
// }