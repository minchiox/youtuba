<?php
require('../config/config.php');
include("../config/authsession.php");
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
    <title>Youtuba - storia</title>
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
      <a href="storia.php" class="slider-button activeB">Storia</a>
      <a href="impara_a_suonare.php" class="slider-button">e-Learning</a>
    </div>
    <div class="titolo">
        <h3><b>STORIA</b></h3>
    </div>
    <!---------------------------------------------------------------------------->
    <!----------------------------Side-nav Menu----------------------------------->

    <div class="slideshow-container-storia">
      <div class="mySlides fadeD">
        <div class="numbertext">1 / 8</div>
        <div class="slider-background">
        <div class="testo">La Tuba, o meglio Bassotuba, nacque a Berlino tra il ’35 e ’36 dell’Ottocento per mano di Friedrich
          Wilhelm Wieprecht (supervisore musicale dell'esercito prussiano), con la supervisione di Johann
          Moritz e Adolphe Sax (inventore del sassofono e della sottofamiglia degli ottoni: flicorni). Venne
          creata per la necessità di estendere la famiglia degli<span class="hover-text"><b><u>ottoni</u></b>
          <span class="tooltip-text"><p>Gli ottoni sono una sottocategoria degli strumenti a fiato realizzati in ottone, ne fanno
            parte: Tromba, trombone, corno francese, tuba.</p></span> e dei flicorni con uno strumento dalle
          tonalità basse capace di dare profondità armonica.
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">2 / 8</div>
        <div class="slider-background">
        <div class="testo">Dal punto di vista strutturale, per rispettare la definizione di flicorno, la tuba presenta un
          canneggio conico che le fornisce un suono caldo, profondo e avvolgente. Gli antenati della tuba
          sono il
          <span class="hover-text"><u><b>Serpentone</b></u>
            <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/1.jpeg" alt="Foto del Serpentone" id="image";></span>
          </span>
          , a sua volta discendente dallo strumento tribale
          <span class="hover-text"><u><b>Didgeridoo</b></u>
            <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/2.jpeg" alt="Foto del Didgeridoo" id="image";></span>
          </span>
          , e
          <span class="hover-text"><u><b>l’Oficleide</b></u>
            <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/3.jpg" alt="Foto del Oficleide" id="image";></span>
          </span>
        </div>
        </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">3 / 8</div>
        <div class="slider-background">
        <div class="testo">Il primo Bassotuba venne creato in tonalità di FA e, solo anni dopo, per mano dell’inventore ceco
          Cervěny, venne costruita la prima Tuba in Sib fornita delle valvole, dette  <span class="hover-text"><u><b>cilindri</b></u>
              <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/cilindro.jpeg" alt="Foto del Cilindro" id="image";></span>
            </span>,
          capaci di permettere la fuoriuscita di tutte le note. Fu una rivoluzione in quanto permise di
          distinguere la tuba in due categorie:
          <ul>
            <li>Tuba bassa, in tonalità MIB e FA</li>
            <li>Tuba contrabassa, in tonalità SIB e DO</li>
          </ul>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">4 / 8</div>
        <div class="slider-background">
        <div class="testo">La Tuba, già nei primi anni dopo la sua creazione, venne utilizzata nelle principali orchestre
          europee dai più importati compositori dell’Ottocento, ricordiamo:
          <ul>
            <li>Sinfonia Fantastica, Hector Berlioz, nel quale la tuba fu un’aggiunta dato che questa
              composizione risale al 1830, ben 6 anni prima della sua creazione. È stata la prima vera e
              propria composizione a cui si possa attribuire l’inserimento della tuba, inoltre questa
              composizione rappresenta una rivoluzione storica in quanto, oltre a trovare per la prima
              volta la tuba, troviamo un duetto di tuba.
              <br><br>
              <div class="button-container">
                <a href="../MULTIMEDIA/VIDEO/VIDEO STORIA/SINFONIA FANTASTICA.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Sinfonia fantastica</a>
              </div>
             </li>
          </ul>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">5 / 8</div>
        <div class="slider-background">
        <div class="testo">
          <ul>
            <li>Richard Wagner si innamorò di questo strumento, tanto da crearne una sua versione, la
              tuba Wagneriana, attualmente suonata dai cornisti. La ritenne subito fondamentale per la
              sua importanza armonica in quanto tassello mancante nella classe degli ottoni (strumenti
              protagonisti nelle principali opere di Wagner, una su tutte Valchirie). <br><br>
              <div class="audio">
              <audio id="audio" controls>
                  <source src="../MULTIMEDIA/Valchirie.mp3" type="audio/mpeg">
                   Your browser does not support the audio element.
              </audio></div><br>
              A Wagner si può attribuire anche un’evoluzione nell’importanza di questo strumento, che
              passa da un ruolo prettamente di accompagnamento a un ruolo da protagonista con
              l’opera Sigfrido, dove la tuba va a descrivere musicalmente il cammino di un serpente
              (figura chiave di quest’opera).
              <br>
              <div class="button-container">
                <a href="../MULTIMEDIA/VIDEO/VIDEO STORIA/SIGFRIDO.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Sigfrido</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">6 / 8</div>
        <div class="slider-background">
        <div class="testo">
          <ul>
            <li><span class="hover-text"><u><b>Giuseppe Verdi non fu un grande estimatore della tuba</b> </u><span class="tooltip-text"><p>In una lettera a Giulio Ricordi, Verdi definì la Tuba con la frase “quel diavolo di
            bombardone”</p></span>
                </span> però non poté fare a meno
              del suo uso utilizzando uno strumento appartenente alla famiglia della Tuba, cioè il
              Cimbasso, al quale nell’opera Falstaff diede un ruolo da protagonista facendogli descrivere
              <span class="hover-text"><u><b>la grande pancia del gigante Falstaff durante un suo pisolino</b> </u><span class="tooltip-text"><p>Questo uso, simile a quello fatto dalla tuba in Sigfrido, può attribuirsi a un
continuo conflitto tra Verdi e Wagner, che li portava a entrare spesso in competizione</p></span>
              </span>
              <br><br>
              <div class="button-container">
                <a href="../MULTIMEDIA/VIDEO/VIDEO STORIA/FALSTAFF.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Falstaff</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">7 / 8</div>
        <div class="slider-background">
        <div class="testo">Come anticipato con il compositore Verdi, la tuba ha degli strumenti che derivano da essa
          appartenenti alla famiglia della tuba stessa. <br>Troviamo:
          <ul>
            <li>
              <span class="hover-text"><u><b>Cimbasso</b></u>
                  <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/5.jpg" alt="Foto del Cimbasso" id="image";></span>
                </span>, utilizzato per lo più nell’opera italiana. Presenta una campana rivolta in maniera
              parallela al suolo al fine di far arrivare il suono a tutti gli orchestrali e presenta un
              canneggio cilindrico che dona un suono squillante e brillante, simile a quello del trombone
            </li>
            <li>
              <span class="hover-text"><u><b>Susafono</b></u>
                  <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/6.jpeg" alt="Foto del Susafono" id="image";></span>
                </span>, discende dall’<span class="hover-text"><u><b>Helicon</b></u>
                    <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/7.jpg" alt="Foto del Susafono" id="image";></span>
                  </span>, ed è stato realizzato negli USA per la sua praticità durante
              la marcia e le parate.
            </li>
            <li>
              <span class="hover-text"><u><b>Euphonium</b></u>
                  <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/8.jpg" alt="Foto del Susafono" id="image";></span>
                </span> (dal greco “bel suono”) ha una storia separata a quella della Tuba, ma le sue
              caratteristiche fanno sì che rientri in questa famiglia
            </li>
            <li>
              Didgeridoo, Serpentone e Oficleide, anche se rappresentato il punto di partenza per la
              nascita della tuba, vengono inclusi nella famiglia della tuba
            </li>
          </ul>
        </div>
      </div>
      </div>
      <div class="mySlides fadeD">
        <div class="numbertext">8 / 8</div>
          <div class="slider-background">
          <div class="testo">  <span class="hover-text"><u><b>La Tuba</b></u>
                <span class="tooltip-image"><img src="../MULTIMEDIA/FOTO/9.jpg" alt="Foto del Susafono" id="image";></span>
              </span> è uno strumento relativamente giovane che ha una storia musicale prettamente legata alle orchestre e ai <span class="hover-text"><u><b>quintetti di ottoni</b></u>
              <span class="tooltip-text"><p> Il quintetto di ottoni è formato da: due trombe un trombone un corno e un Bassotuba</p></span>
              </span>, e ha avuto un ruolo marginale nei generi protagonisti del
            ‘900. Negli anni ’50, però, venne utilizzata la tuba per la prima volta in un concerto solistico per
            tuba e orchestra che diede il via al ruolo della tuba come strumento solistico. Il concerto in
            questione è Concerto per tuba (Vaughan Williams), realizzato nel 1954 per la London Symphony
            Orchestra. In quegli anni, oltre oceano, una rivoluzione venne data da Arnold
            Jacobs (principale tuba della Chicago Symphony), che combinò nozioni di anatomia e psicologia
            per creare una nuova didattica per la tuba, capace di abbattere le barriere virtuosistiche da
            sempre attribuite a questo strumento.
            <br><br>
              <div class="button-container">
                <a href="../MULTIMEDIA/VIDEO/VIDEO STORIA/WILLIAMS.mp4" class="video video-popup mfp-iframe" id="slider-button" data-lity>Video Williams</a>
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
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
    </div>

    <img src="../grafica/Immagini/exit2.svg" onclick="closeTabWithSafetyNet();" alt="Close Tab" class="exit"></img>




    <script>
      function closeTabWithSafetyNet() {
        if (confirm("Sei sicuro di voler uscire?")) {
          location.href = '../logout.php';
        }
      }
    </script>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script></script><script  src="../Menu/script.js"></script>
    <script src='../login_page/sfondo.js'></script><script  src="../login_page/script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.0/lity.min.js'></script>
    <script src='slider.js'></script>
    <script src='bottoni.js'></script>
  </body>
</html>
