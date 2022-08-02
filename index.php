<?php
require_once "./functions/main.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/splide.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">First Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contacts">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=upload">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=galleries">Galleries</a>
                    </li>

                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?page=signup">Sign Up</a></li>
                            <li><a class="dropdown-item" href="index.php?page=login">Login</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <?php

        if (file_exists("./pages/$page.php")) { //проверяет есть ли файл по заданному пути. Также может проверять и наличие папки
            require "./pages/$page.php";
        } else {
            echo "<h1>Page not found</h1>";
        }

        /*         $folders = glob('uploads/gallery/*', GLOB_ONLYDIR);
        dump($folders);
        dump(basename($folders[0]));

        $images = glob('uploads/gallery/animals/*'); //получаем все картинки массивом */
        ?>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="./js/splide.js"></script>

</body>

</html>