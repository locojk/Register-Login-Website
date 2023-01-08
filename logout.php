<?php
//End session and back to login page when user logout
session_start();
session_destroy();
header("Location: loginPage.php");

