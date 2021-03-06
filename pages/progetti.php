<?php include "../php/insert_progetti.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <title>Progetti</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-left">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                  <img src="../media/img/effe.png" alt="" class="logo">
                </a>
            </div>
            <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link ncol" href="../index.php">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ncol" href="../pages/news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ncol" href="../pages/progetti.php">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ncol" href="../pages/gxg.php">GXG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ncol" href="../pages/inostrivalori.html">I nostri valori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ncol" href="../pages/donazione.html">Donazioni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ncol" href="../pages/chisiamo.html">Chi siamo</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <h1>I NOSTRI PROGETTI</h1>
    <?= getAllProjects() ?>
    <footer id = "footer">  
      <div class = "footer-top">
        <div class = "container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-info">
              <div id = "imgFooter"><img src="../media/img/effe.png" alt="" class = "img-responsive"></div>
                <div id = "testoFooter"> 
                  Fondazione Edulife Onlus nasce nell’ambito di una rete mondiale dedicata alla educazione dei giovani.
                </div>
              </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Contatti</h4>
                    <p>Fondazione Edulife
                    <br>
                      Lungadige Galtarossa, 21
                    <br>
                      37133 Verona
                    <br>
                      Tel. +39 045 9696300
                    <br>
                      Fax +39 045 9696301
                    <br>
                      info@edulife.it</p>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-contact middle">
                      <h4>I nostri social</h4>
                      <a class = "btn" href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                      <a class = "btn" href="https://www.facebook.com/FondazioneEdulife" class="facebook"><i class="fab fa-facebook-f"></i></a>
                      <a class = "btn" href="https://twitter.com/EdulifeOnlus" class="twitter"><i class="fab fa-twitter"></i></a>
                  </div>
                <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Dove siamo</h4>
                <div class="mappa">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2799.943064754773!2d10.99683911507071!3d45.43064904370334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x477f5f3fd94d631f%3A0xb9a1156ee2f8c5e!2s311+Verona%2C+Lungadige+Galtarossa%2C+21%2C+37133+Verona+VR!3m2!1d45.430374099999995!2d10.9985254!5e0!3m2!1sit!2sit!4v1553077721735" width="240" height="160" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
                </div>
              </div>
            </div>
            <p class="copyright text-muted">Copyright &copy;Edulife 2019</p>
          </div>
        </div>
    </footer>
</body>
</html>