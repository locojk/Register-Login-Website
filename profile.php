<!doctype html>
<html lang="en">

<head>
    <title>Welcome</title>
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

<main>

    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="vh-50 m-auto d-flex flex-column align-content-center justify-content-center">
                                <h2 class="text-center">Your profile</h2>
                                <h3 class="text-center">Username: </h3>
                                <h3 class="text-center">Email: </h3>
                                <p class="text-center"><a href="logout.php">Log out</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>
