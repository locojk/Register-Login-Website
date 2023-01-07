<?php
require_once "db.php";

if (isset($username) && isset($user_password) && isset($email) && isset($connect)) {

    $query = "INSERT INTO `Users`(`user_name`, `password`, `email`) VALUES ('$username', '$user_password', '$email')";
    $result = $connect -> query($query);

    if ($result) {
        header("Location: loginPage.php");
    } else {
        $_POST['dbError'] = "Some error occur";
    }
}


