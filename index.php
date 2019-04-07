<?php include "php/insert_newsHome.php" ?>
<?php include "php/insert_gxg.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Fondazione Edulife</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="css/main.css">

      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      <!-- font-awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

      <!-- greensock -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

</head>
<body>

      <div class="overlay">
            <h1>Caricamento...</h1>
      </div>
      
      <div id='hero'>
    
      <div class='layer-bg layer' data-depth='0.10' data-type='parallax'></div>
      
      <div class='layer-1 layer' data-depth='0.20' data-type='parallax'></div>
      <div class='layer-2 layer' data-depth='0.50' data-type='parallax'></div>
      <div class='layer-3 layer' data-depth='0.80' data-type='parallax'></div>
      <div class='layer-overlay layer' data-depth='0.85' data-type='parallax'></div>


      <div class="wrapper">
            <div class="logo">Fondazione Edulife</div>
            <div class="nav">
                  <ul>
                        <li>
                              <a href="pages/news.php">News</a>
                        </li>
                        <li>
                              <a href="pages/progetti.php">Progetti</a>
                        </li>
                        <li>
                              <a href="pages/gxg.php">GxG</a>
                        </li>
                        <li>
                              <a href="pages/donazione.html">5x1000</a>
                        </li>
                        <li>
                              <a href="pages/chisiamo.html">Chi siamo</a>
                        </li>
                  </ul>
            </div>
            <div class="social-media">
                  <ul>
                        <li>
                              <a href="https://www.facebook.com/FondazioneEdulife">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://twitter.com/EdulifeOnlus">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
            <div class="side-strip">
                  <span>UN SITO PENSATO DAI GIOVANI PER I GIOVANI</span>
            </div>
            <div class="header">
                  <h1>Ultimo video caricato:</h1>
                        <?= getGxgHome() ?>
            </div>
            <div class="bottom-bar">
                  <div class="container">
                        <div class="row">
                              <?= getAllNewsHome() ?>
                        </div>
                  </div>
            </div>
      </div>
<div>

      <script type="text/javascript">

      TweenMax.to(".overlay h1", 2, {
            opacity: 0,
            y: -60,
            ease: Expo.easeInOut
      })

      TweenMax.to(".overlay", 2, {
            delay: 1,
            top: "-100%",
            ease: Expo.easeInOut
      })

      TweenMax.from(".logo", 1, {
            delay: 2.4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom(".nav ul li", 1, {
            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
      }, 0.2)

      TweenMax.staggerFrom(".social-media ul li", 1, {
            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
      }, 0.2)

      TweenMax.from(".side-strip", 2, {
            delay: 2.4,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row", 2, {
            delay: 2.4,
            opacity: 0,
            x: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row h6", 2, {
            delay: 3,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row p", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header h1", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header p", 2, {
            delay: 3.4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header button", 2, {
            delay: 3.6,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })
      </script>
</body>
</html>
