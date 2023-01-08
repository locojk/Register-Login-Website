<?php
require "includes/login.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<?php
include "includes/header.php"
?>

<section>
    <div class="container mt-5 pt-5">
        <div class="row text-center mb-3 mt-5">
            <h2>Login</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Username</label>
                                <input type="text" class="form-control <?php if(isset($error)) echo "is-invalid"; ?>" id="exampleInputUsername1" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control <?php if(isset($error)) echo "is-invalid"; ?>" id="exampleInputPassword1" name="password">
                                <?php if(isset($error)){?>
                                    <p class="invalid-feedback"><?php echo $error ?></p>
                                <?php } ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
