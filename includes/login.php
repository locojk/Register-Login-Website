<?php

require_once "classes/UserManager.php";
require_once "classes/User.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $userManager = new UserManager();

    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $user = $userManager->login($username, $password);
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['email'] = $user->getEmail();
        header("Location: profile.php");
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}


