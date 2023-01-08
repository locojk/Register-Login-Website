<?php

//Validation for register input
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_message = 'There was a POST request';
    $username = $_POST['username'];
    $password = $_POST['user_password'];
    $email = $_POST['email'];
    $confirm = $_POST['confirm'];
    $okay = true;

    if(empty($username)) {
        $username_error = "Please enter username";
        $okay = false;
    }

    if(empty($email)) {
        $email_error = "Please enter email";
        $okay = false;
    }
    elseif (!preg_match('/^[^@]+@[^@]+\.[a-z]{2,5}$/i', $email)) {
        $email_error = "Email format is invalid";
        $okay = false;
    }

    if(empty($password)) {
        $password_error = "Please enter password";
        $okay = false;
    } elseif (mb_strlen($password) < 8) {
        $password_error = "Password must be at least 8 character";
        $okay = false;
    } elseif (!preg_match('/[a-z]/', $password)) {
        $password_error = "Password must has at least one lowercase letter";
        $okay = false;
    } elseif (!preg_match('/[0-9]/', $password)) {
        $password_error = "Password must has at least one number";
        $okay = false;
    }

    if(empty($confirm)) {
        $confirm_error = "Please confirm password";
        $okay = false;
    } elseif($confirm != $password){
        $confirm_error = "Your passwords do not match";
        $okay = false;
    }

    //If input valid, allow register
    if($okay) {
        require "includes/register.php";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Registration Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

<?php
include "includes/header.php"
?>

<section>
    <div class="container mt-3 pt-5">
        <div class="row text-center mb-3">
            <h2>Registration</h2>
        </div>
        <div class="row">
            <div class="col-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                            <div class="mb-3">
                                <label for="exampleUsername" class="form-label">Username</label>
                                <input type="text" class="form-control <?php if(isset($username_error)) echo "is-invalid"; ?>" id="exampleUsername" name="username">
                                <?php if(isset($username_error)){?>
                                    <p class="invalid-feedback"><?php echo $username_error ?></p>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control <?php if(isset($email_error)) echo "is-invalid"; ?>" id="exampleInputEmail1" name="email">
                                <?php if(isset($email_error)){?>
                                    <p class="invalid-feedback"><?php echo $email_error ?></p>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control <?php if(isset($password_error)) echo "is-invalid"; ?>" id="exampleInputPassword1" name="user_password">
                                <?php if(isset($password_error)) { ?>
                                    <p class="invalid-feedback"><?php echo $password_error ?></p>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control <?php if(isset($confirm_error)) echo "is-invalid"; ?>" id="exampleInputConfirmPassword1" name="confirm">
                                <?php if(isset($confirm_error)) { ?>
                                    <p class="invalid-feedback"><?php echo $confirm_error ?></p>
                                <?php } ?>
                            </div>
                            <button type="submit" class="btn btn-primary m-auto" name="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>
