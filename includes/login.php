<?php

require_once "classes/UserManager.php";
require_once "classes/User.php";

//Use session to show user information in profile page
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $userManager = new UserManager();

    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        //try to login
        $user = $userManager->login($username, $password);
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['email'] = $user->getEmail();
        header("Location: profile.php");
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}


