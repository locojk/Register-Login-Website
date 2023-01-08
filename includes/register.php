<?php

if (isset($username) && isset($password) && isset($email)) {
    require_once "classes/UserManager.php";

    $userManager = new UserManager();

    try {
        $userManager->register($username, $password, $email);
        header("Location: loginPage.php");
    } catch (Exception $e) {
        if ($e->getMessage() == "Username is already taken") {
            $username_error = $e->getMessage();
        }
        echo "Error: " . $e->getMessage();
    }
}


