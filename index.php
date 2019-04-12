<?php include "php/insert_newsHome.php";
$array_news = getAllNewsHome();
?>
<?php include "php/insert_gxg.php" ?>
<?php include "php/insert_progetti.php";
$array_progetti = getAllProgettiHome(); ?>
<?php include "php/get_file.php" ?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/style_index.css">
        <link rel="stylesheet" href="css/glider.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Fondazione Edulife Onlus</title>
    </head>
    <body style="background-color: rgb(236, 236, 236)">
    <header class="parallax">
        <video autoplay muted loop id="myVideo">
            <source src="media/video/Walking.mp4" type="video/mp4">
        </video>
        <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-left">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="media/img/effe.png" alt="" class="logo">
                </a>
            </div>
            <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link abc" href="index.php">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/progetti.php">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/gxg.php">GXG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/inostrivalori.html">I nostri valori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/donazione.html">Donazioni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/chisiamo.html">Chi siamo</a>
                    </div>
                    </li>
                </ul>
        </nav>

        </header>
        <div class="container-fluid" style="background-color: white;">
            <div class="container">
            <h1 class="scritte_home">Le ultime news</h1>
            <div class="container bottom-bar">
                  <div class="container col-sm-12">
                        <div class="row">
                              <?php for($i = 0; $i < count($array_news); $i++){ ?> 
                                    <form class='col-sm-12 col-md-4' action='pages/show.php' method='post'>

                                          <input type='hidden' name='table' value='news' />
                                          <input type='hidden' name='id' value='<?= $array_news[$i]['id'] ?>' />
                                          <button  href='pages/show.php?table=progetto&id=<?= $array_news[$i]['id']?>'>
                                          <div class='card' style='background-color: rgba(255, 255, 255) !important; width: 18rem; transition: transform .6s; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);'>
                                          <img class='card-img-top' src='../media/img/<?= $array_news[$i]['nome'] ?>' alt='Card image cap'>
                                          <div class='card-body'>
                                                <h6 class='title'><?= corto($array_news[$i]['titolo'], 25) ?>
                                                </h6>
                                                <p class='card-text'style='color:#000; font-size: 10px'><?= corto($array_news[$i]['contenuto'], 75)?>
                                                </p>
                                          </div>
                                          </div>
                                          </button>   
                                    </form>
                              <?php }?>
                        </div>
                  </div>
            </div>
                </div>
                <div class="container">
                    <<h1 class="scritte_home">I nostri progetti</h1>

                    <div class="container bottom-bar">
                        <div class="container col-sm-12">
                                <div class="row">
                                    <?php for($i = 0; $i < count($array_progetti); $i++){ ?> 
                                            <form class='col-sm-12 col-md-4' action='pages/show.php' method='post'>

                                                <input type='hidden' name='table' value='progetto' />
                                                <input type='hidden' name='id' value='<?= $array_progetti[$i]['id'] ?>' />
                                                <button  href='pages/show.php?table=progetto&id=<?= $array_progetti[$i]['id']?>'>
                                                <div class='card' style='background-color: rgba(255, 255, 255) !important; width: 18rem; transition: transform .6s; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);'>
                                                <img class='card-img-top' src='../media/img/<?= $array_progetti[$i]['nome'] ?>' alt='Card image cap'>
                                                <div class='card-body'>
                                                        <h6 class='title'><?= corto($array_progetti[$i]['titolo'], 25) ?>
                                                        </h6>
                                                        <p class='card-text'style='color:#000; font-size: 10px'><?= corto($array_progetti[$i]['contenuto'], 75)?>
                                                        </p>
                                                </div>
                                                </div>
                                                </button>   
                                            </form>
                                    <?php }?>
                                </div>
                        </div>
                    </div>

                </div>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                <div class="container" style="padding-bottom:15px;">
                <h1 class="scritte_home">Chi siamo</h1>

            <div class="backgroundNews">
                  <div class="row" id="testoDonazioni">
                        <p>
                              <b>Fondazione Edulife Onlus</b> nasce nell’ambito di una rete mondiale dedicata alla educazione dei giovani ed ha come finalità aiutare i giovani nella scoperta del proprio progetto di vita e promuovere gli adulti nel loro ruolo educativo.

                              L’attività della <b>Fondazione</b> si sviluppa in tre ambiti: - <strong>Centro di ricerca per la innovazione didattica sviluppata con persone, enti, imprese ed istituzioni;</strong> - <strong>“Pensatoio” per la ideazione di progetti a favore della crescita umana e professionale dei giovani;</strong> - <strong>fondi per sostenere progetti educativi sempre destinati ai giovani.</strong>
                              
                              La <b>Fondazione</b> opera in stretta relazione con una rete di organizzazioni educative presenti in 131 Paesi, con oltre 4.000 opere educative e circa 2.000.000 di giovani destinatari.
                        </p>
                  </div>
            </div>
                
                </div>
                
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2799.943064754773!2d10.99683911507071!3d45.43064904370334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x477f5f3fd94d631f%3A0xb9a1156ee2f8c5e!2s311+Verona%2C+Lungadige+Galtarossa%2C+21%2C+37133+Verona+VR!3m2!1d45.430374099999995!2d10.9985254!5e0!3m2!1sit!2sit!4v1553077721735" width="320" height="200" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                        <p class="copyright text-muted">Copyright &copy;Edulife 2019</p>
                    </div>
                    </div>
                </footer>
        </div>

            
           
        
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/glider_index.js"></script>
        <script src="js/glider.js"></script>
        
    </body>
</html>