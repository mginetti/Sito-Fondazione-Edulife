<?php include "../php/insert_progetti.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style_progetti.css">
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <title>Progetti</title>
</head>
<body>
        <header class="parallax">
            <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-center">
                <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link abc" href="#">Home <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abc" href="//codeply.com">News e Eventi</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link abc" href="//codeply.com">Progetti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link abc" href="#">Chi siamo</a> 
                        </li>
                        <li class="nav-item">
                                <a class="nav-link abc" href="#">Contatti</a> 
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <h1>I NOSTRI PROGETTI</h1>
    <?= getAllProjects() ?>
</body>
</html>