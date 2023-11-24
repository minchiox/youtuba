<?php
 //require('../config/config.php');
 //include("../config/authsession.php");
?>


<!DOCTYPE html>
<html lang="it">
  <head>
    <link rel="shortcut icon" href="/grafica/Logo/Logo_tuba2.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'><link rel="stylesheet" href="../home/homeaiuto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../button.css">
    <link rel="stylesheet" href="../fixed.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"><link rel="stylesheet" href="../Menu/style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="tooltip.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.css'><link rel="stylesheet" href="../videopoup/style.css">
    <meta charset="UTF-8">
    <title>Youtuba - impara a suonare</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-custom navbar-mainbg">
      <img src="../grafica/Logo/Logo_tuba2.svg" class="navbar-brand navbar-logo">
      <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
              <li class="nav-item">
                  <a class="nav-link" href="../home/home.php"><i class="fas fa-igloo"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../home/mappaHome.php"><i class="fas fa-map"></i>Mappa</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../home/aiutoHome.php"><i class="fa-solid fa-circle-question"></i>Aiuto</a>
              <li class="nav-item">
                  <a class="nav-link" href="../home/creditiHome.php"><i class="fa-regular fa-face-grin-tongue-wink"></i>Crediti</a>
              </li>
          </ul>
      </div>
    </nav>
    <div class="button-container">
      <a href="storia.php" class="slider-button">Storia</a>
      <a href="impara_a_suonare.php" class="slider-button activeB">e-Learning</a>
    </div>
    <div class="titolo">
        <h3><b>IMPARA A SUONARE</b></h3>
    </div>
    <!---------------------------------------------------------------------------->
    <!----------------------------Side-nav Menu----------------------------------->

    <div class="slideshow-container-storia">
      <div class="mySlides fadeD">
        <div class="numbertext">1 / 5</div>
        <div class="slider-background">
        <div class="testo">Per suonare uno strumento è indispensabile capire com’è fatto e, nel caso degli strumenti a fiato, quali
          parti permettono la creazione del suono. Nel caso della tuba il ruolo principale lo ricopre <span class="hover-text"><u><b>il bocchino</b></u>
            <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/Bocchino.jpeg" alt="Foto del bocchino" id="image";></span>
          </span> che permette di creare una
          vibrazione che attraverso lo strumento diverrà un suono ben definito. Nel video seguente una dimostrazione della vibrazione creata dal bocchino.<br>
          <br><br>
          <div class="button-container">
            <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/Buzz.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Buzz</a>
          </div>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">2 / 5</div>
        <div class="slider-background">
        <div class="testo">Un altro ruolo
          fondamentale, trattandosi di uno strumento a fiato, lo ricopre la respirazione.
             <br>
            <div class="button-container">
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/POLMONI.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Respirazione</a>
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/Patrick.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Patrick</a>
            </div>
        </div>
        </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">3 / 5</div>
        <div class="slider-background">
        <div class="testo">Una volta definiti gli elementi principali va definito come utilizzarli al meglio e qual è la tecnica corretta per
          il loro uso.<br>
          <div class="button-container">
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/bocchino.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Bocchino</a>
          </div>
          <br>
          Tramite questa tecnica possiamo effettuare gli armonici che permetteranno
          di ottenere tutte le note dalla tuba.
          <br>
          <div class="button-container">
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/VIDEO3.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Armonici e Tonalità</a>
          </div>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">4 / 5</div>
        <div class="slider-background">
        <div class="testo">Conoscendo l’impostazione giusta per ottenere i suoni, possiamo già riuscire a suonare con scioltezza gli
          armonici e le prime scale.
          <br>
          <div class="button-container">
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/SCALE.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Scale</a>
          </div>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">5 / 5</div>
        <div class="slider-background">
        <div class="testo">
          Per padroneggiare al meglio uno strumento bisogna conoscere la sua tecnica base, nel caso della tuba
          possiamo sintetizzare tutto in tre macroaree:
          <div class="button-container">
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/DINAMICHE.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Dinamiche</a>
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/STACCATO.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Staccato</a>
              <a href="../MULTIMEDIA/VIDEO/VIDEO E-LEARNING/LEGATO1.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Legato</a>
            </div>
        </div>
      </div>
      </div>


      <a class="prevD" onclick="plusSlides(-1)">&#10094;</a>
      <a class="nextD" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    <img src="../grafica/Immagini/exit2.svg" onclick="closeTabWithSafetyNet();" alt="Close Tab" class="exit"></img>




    <script>
      function closeTabWithSafetyNet() {
        if (confirm("Sei sicuro di voler uscire?")) {
          location.href = '../logout.php';
        }
      }
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script></script><script  src="../Menu/script.js"></script>
    <script src='../login_page/sfondo.js'></script><script  src="../login_page/script.js"></script>
    <script src='slider.js'></script>
    <script src='bottoni.js'></script>
  </body>
</html>
