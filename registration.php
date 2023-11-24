<?php
require 'config/config.php';
if(isset($_POST["submit"])){
  $email= $_POST["email"]; //email
 	$fullname= $_POST["fullname"]; //nome e cognome
  $password= $_POST["password"];
 	$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email ='$email' ");
 	if(mysqli_num_rows($duplicate) > 0){
      echo "<script> alert('Email già esistente'); </script>";
  	}
  	else{
  		$query = "INSERT INTO tb_user VALUES('$email','$fullname','$password',NULL)";
  		mysqli_query($conn,$query);
  		echo "<script> alert('La registrazione è andata a buon fine') </script>";
      $_SESSION['fullname']= $fullname; //farei diventare nome e cognome in solo nome
      header("Location: home/home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="it" >
<head>
  <link rel="shortcut icon" href="/grafica/Logo/Logo_tuba2.png" />
  <meta charset="UTF-8">
  <title>Youtuba - Registration Page</title>
  <link rel='stylesheet' href='login_page/form.css'><link rel="stylesheet" href="login_page/style.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"><link rel="stylesheet" href="../Menu/style.css">
    <link rel="stylesheet" href="fixed.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<body class="registration">
<!-- partial:index.partial.html -->
<div class="dust-paarticle">

<svg width="100%" id="dust-paarticle" height="100%" viewBox="0 0 885 455" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M678.1 394.1C679.923 394.1 681.4 392.622 681.4 390.8C681.4 388.977 679.923 387.5 678.1 387.5C676.277 387.5 674.8 388.977 674.8 390.8C674.8 392.622 676.277 394.1 678.1 394.1Z" stroke="#F4CD39" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path opacity="0.46" d="M880.3 342.9C882.123 342.9 883.6 341.423 883.6 339.6C883.6 337.777 882.123 336.3 880.3 336.3C878.477 336.3 877 337.777 877 339.6C877 341.423 878.477 342.9 880.3 342.9Z" stroke="#F4CD39" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path opacity="0.46" d="M282.2 7.69997C284.023 7.69997 285.5 6.2225 285.5 4.39996C285.5 2.57742 284.023 1.09998 282.2 1.09998C280.377 1.09998 278.9 2.57742 278.9 4.39996C278.9 6.2225 280.377 7.69997 282.2 7.69997Z" stroke="#F4CD39" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M598.3 207.8C601.061 207.8 603.3 205.561 603.3 202.8C603.3 200.039 601.061 197.8 598.3 197.8C595.539 197.8 593.3 200.039 593.3 202.8C593.3 205.561 595.539 207.8 598.3 207.8Z" stroke="#FDB130" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M48.7 442.7C50.4121 442.7 51.8 441.312 51.8 439.6C51.8 437.888 50.4121 436.5 48.7 436.5C46.9879 436.5 45.6 437.888 45.6 439.6C45.6 441.312 46.9879 442.7 48.7 442.7Z" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M489.7 311.7C491.909 311.7 493.7 309.909 493.7 307.7C493.7 305.491 491.909 303.7 489.7 303.7C487.491 303.7 485.7 305.491 485.7 307.7C485.7 309.909 487.491 311.7 489.7 311.7Z" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M373.8 225C375.623 225 377.1 223.523 377.1 221.7C377.1 219.877 375.623 218.4 373.8 218.4C371.977 218.4 370.5 219.877 370.5 221.7C370.5 223.523 371.977 225 373.8 225Z" stroke="#FDB130" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M844.1 453.7C846.309 453.7 848.1 451.909 848.1 449.7C848.1 447.491 846.309 445.7 844.1 445.7C841.891 445.7 840.1 447.491 840.1 449.7C840.1 451.909 841.891 453.7 844.1 453.7Z" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M151 254.6C152.16 254.6 153.1 253.66 153.1 252.5C153.1 251.34 152.16 250.4 151 250.4C149.84 250.4 148.9 251.34 148.9 252.5C148.9 253.66 149.84 254.6 151 254.6Z" stroke="#FDB130" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.6 315.9C4.7598 315.9 5.7 314.96 5.7 313.8C5.7 312.64 4.7598 311.7 3.6 311.7C2.4402 311.7 1.5 312.64 1.5 313.8C1.5 314.96 2.4402 315.9 3.6 315.9Z" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M768.2 366.7H775.5" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M771.8 363.1V370.4" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<g opacity="0.6">
<path opacity="0.6" d="M696.4 40.5H703.8" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path opacity="0.6" d="M700.1 36.8V44.2" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<path d="M630.3 284.1H636" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M633.2 281.2V286.9" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M414.9 104.5H420.6" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M417.8 101.7V107.3" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M203.7 290.8H211.5" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M207.6 286.9V294.6" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M165.9 402.7H176.2" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M171 397.5V407.9" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M252.1 346.8C253.2 345.3 254.8 346.4 255.9 344.9C257 343.4 255.4 342.2 256.5 340.7C257.6 339.2 259.2 340.3 260.3 338.8C261.4 337.3 259.8 336.1 260.9 334.5C262 333 263.6 334.1 264.7 332.6" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<g opacity="0.4">
<path opacity="0.4" d="M36.3 391.2C35.7 389.4 37.5 388.7 36.9 387C36.3 385.2 34.4 385.9 33.7 384.1C33.1 382.3 34.9 381.6 34.3 379.9C33.7 378.1 31.8 378.8 31.1 377C30.5 375.2 32.3 374.5 31.7 372.8" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<path d="M732.3 292.1C730.6 291.2 731.5 289.5 729.8 288.6C728.1 287.7 727.2 289.5 725.5 288.7C723.8 287.8 724.7 286.1 723 285.2C721.3 284.3 720.4 286.1 718.7 285.3C717 284.4 717.9 282.7 716.2 281.8" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<g opacity="0.53">
<path opacity="0.53" d="M282.7 439.7C281.5 440.4 280.5 438.7 279.3 439.4C278.1 440.1 279.1 441.8 278 442.5C276.8 443.2 275.8 441.5 274.6 442.2C273.4 442.9 274.4 444.6 273.3 445.3C272.2 446 271.1 444.3 269.9 445" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<path d="M819.6 253.6C821.4 253 822 255 823.8 254.4C825.6 253.8 825 251.9 826.8 251.4C828.6 250.8 829.2 252.8 831 252.2C832.8 251.6 832.2 249.7 834 249.2C835.8 248.7 836.4 250.6 838.2 250" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M487.9 207.4C489.7 206.8 490.3 208.8 492.1 208.2C493.9 207.6 493.3 205.7 495.1 205.2C496.9 204.6 497.5 206.6 499.3 206C501.1 205.4 500.5 203.5 502.3 203C504.1 202.5 504.7 204.4 506.5 203.8" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

  </div>

  <nav class="navbar navbar-expand-custom navbar-mainbg">
    <img src="../grafica/Logo/Logo_tuba2.svg" class="navbar-brand navbar-logo">
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="../index.html"><i class="fas fa-tachometer-alt"></i>Splash screen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../mappa.html"><i class="fas fa-map"></i>Mappa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../aiuto.html"><i class="fa-solid fa-circle-question"></i>Aiuto</a>
            <li class="nav-item">
                <a class="nav-link" href="credits/credits.html"><i class="fa-regular fa-face-grin-tongue-wink"></i>Crediti</a>
            </li>
        </ul>
    </div>
  </nav>

<div class="container-fluid">
  <div class="row">
    <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
      <div class="col-sm-5 authfy-panel-left">
        <div class="brand-col">
          <div class="headline">
            <!-- brand-logo start -->
            <div class="brand-logo">
              <img src="/grafica/Logo/Logo_tuba.svg" width="150" alt="brand-logo">
            </div><!-- ./brand-logo -->
            <p>Questa è la sezioni di registrazione, registrati per nuove importanti lezioni sulla tuba</p>
          </div>
        </div>
      </div>
      <div class="col-sm-7 authfy-panel-right">
        <!-- authfy-login start -->
        <div class="authfy-login">
          <!-- panel-signup start -->
          <div class="authfy-panel panel-signup text-center active">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                  <h3 class="auth-title">Iscriviti gratis!</h3>
                </div>
                <form name="signupForm" class="signupForm" action="#" method="POST">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Nome e cognome" required>
                  </div>
                  <div class="form-group">
                    <div class="pwdMask">
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Registrati!</button>
                  </div>
                </form>
                <a class="lnk-toggler" data-panel=".panel-login" href="login.php">Hai già un'account?</a>
              </div>
            </div>
          </div> <!-- ./panel-signup -->
        </div> <!-- ./authfy-login -->
      </div>
    </div>
  </div> <!-- ./row -->
</div>

<div id="tuba">

<svg width="100%" height="100" version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#E6B300;}
	.st1{fill:#DD7E0E;}
	.st2{fill:#FFFFFF;}
	.st3{fill:#241726;}
	.st4{fill:#FBFCFF;}
</style>
<g id="XMLID5">
	<path class="st0" d="M475,175.6l-33.7-2c0,0-1.6,91.4-69.1,133.1c1.6-2.3,3.1-4.7,4.6-7c50.4-78.9,71.5-212.8-65.3-232.9
		C185.1,48.1,138.3,185.2,183.9,274c6.1,11.8,14.4,22.8,24.4,32.6c-70.8-36-95.8-157.8-106.7-162.5C89.9,139,16.5,437.6,24.2,446
		c7.7,8.4,39.7-38,152.6-38.4c73.3-0.3,121.6-23.6,155.6-54.3c30.1-1.5,60-11.9,85.1-34C483.9,260.9,475,175.6,475,175.6z
		 M343.2,267.2c-14.5-2.1-43.1-7.2-67.7-17.6c12.9-8.3,25.5-25.5,29.2-60.3c1.4-13.2-2.1-25.6-8.7-36.5
		c32.4,3.4,67.7,23.5,85.1,34.6C377.9,215.8,363.6,244.3,343.2,267.2z M272.9,153.8c32,35.3,4.6,88.5-26.7,78.1
		c-14.2-13.1-19.8-30.6-6.3-53.9C248.1,163.9,259.7,156.6,272.9,153.8z M371.8,134.6c6.1,11.8,9.2,24.4,9.8,37.2
		c-11.5-7.4-29.9-17.9-51-25.3c2.8-9.9,7.2-26,10.4-40.2C354.8,113.5,365.9,123.3,371.8,134.6z M319.2,97.8l-7.8,43.1
		c-9.1-2.1-18.5-3.4-27.9-3.4c-14-13.6-33.1-23.1-51.5-26.3C256.2,92.1,290.2,89.7,319.2,97.8z M200.5,182.8
		c0.9-22.3,6.4-39.8,14.9-53.2c10.6-1.8,24.7,0.2,42.3,11.7c-37.7,13-64.1,59-33.7,98.3c24.3,31.4,74.7,41.4,101.8,44.6
		c-18.2,15.4-39.3,26.5-60.7,30.5C229.9,298.8,197.5,261.4,200.5,182.8z"/>
	<path class="st1" d="M318.3,268.4c0,0,23.7-107.2,27.7-106.9c4,0.3,15.2,8.2,15.2,8.2S334,273.6,331.4,276
		C328.9,278.4,318.3,268.4,318.3,268.4z"/>
	<path class="st2" d="M45,409.9c0,0,51.1-190.2,57.7-208.1c0,0,30.4,70.4,9.4,124.9S45,409.9,45,409.9z"/>
	<path class="st3" d="M78.9,409.6c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,24.7-14.5,42.1-44.6
		c16.1-27.7,29.4-74.8,1.4-141.8c-0.2-0.5,0-1.2,0.6-1.4c0.5-0.2,1.2,0,1.4,0.6c15.7,37.4,28.1,92.8-1.5,143.7
		c-17.8,30.5-42.6,45.1-42.9,45.2C79.3,409.5,79.1,409.6,78.9,409.6z"/>
	<path class="st1" d="M441.3,173.6c0,0,3.8-57.6-18.3-78.2l-34.1-11.7l71.9-38.3l-12,40.5c0,0,25.2,35.5,26.3,89.7L441.3,173.6z"/>
	<polygon class="st0" points="280.3,264.4 268.2,320 281.4,323.9 298.8,268.4 	"/>
	<path class="st3" d="M247.5,318.3c-4.7,0-8.9-0.4-12.6-0.9c-16.8-2.6-26-9.4-26.4-9.7c-0.5-0.3-0.6-1-0.2-1.5
		c0.4-0.5,1-0.6,1.5-0.2c0.4,0.3,37.1,27,95.9-7.2c0.5-0.3,1.1-0.1,1.4,0.4c0.3,0.5,0.1,1.1-0.4,1.4
		C282.8,314.4,262.6,318.3,247.5,318.3z"/>
	<path class="st3" d="M303.4,377c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.2-1.1,0.3-1.5c49.3-30.6,72.8-75.5,73-76
		c0.3-0.5,0.9-0.7,1.4-0.5c0.5,0.3,0.7,0.9,0.5,1.4c-0.2,0.5-23.9,45.9-73.8,76.8C303.8,377,303.6,377,303.4,377z"/>
	<g>
		<path class="st4" d="M195.5,392.7c-2.4,0-4-0.7-4.1-0.7c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5l0,0
			c0.2,0.1,4.8,2,10-1.8c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C200.5,392.1,197.7,392.7,195.5,392.7z"/>
		<path class="st4" d="M200.9,385.4c-2.4,0-4-0.7-4.1-0.7c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5c0.2,0.1,4.8,2,10-1.8
			c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C205.9,384.8,203.1,385.4,200.9,385.4z"/>
		<path class="st4" d="M205.1,399.9c-2.4,0-4-0.7-4.1-0.7c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5c0.2,0.1,4.8,2,10-1.8
			c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C210.1,399.3,207.3,399.9,205.1,399.9z"/>
		<path class="st4" d="M211.9,390.8c-2.4,0-4-0.7-4.1-0.7c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5c0.2,0.1,4.8,2,10-1.8
			c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C216.9,390.3,214.1,390.8,211.9,390.8z"/>
		<path class="st4" d="M225.1,396.3c-2.4,0-4-0.7-4.1-0.8c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5c0.2,0.1,4.8,2,10-1.8
			c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C230.1,395.7,227.3,396.3,225.1,396.3z"/>
		<path class="st4" d="M234.1,387.3c-2.4,0-4-0.7-4.1-0.8c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5l0,0
			c0.2,0.1,4.8,2,10-1.8c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C239.1,386.7,236.3,387.3,234.1,387.3z"/>
		<path class="st4" d="M221,382.1c-2.4,0-4-0.7-4.1-0.7c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5c0.2,0.1,4.8,2,10-1.8
			c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C226,381.5,223.1,382.1,221,382.1z"/>
		<path class="st4" d="M239.3,379.5c-2.4,0-4-0.7-4.1-0.7c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5l0,0
			c0.2,0.1,4.8,2,10-1.8c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C244.4,379,241.5,379.5,239.3,379.5z"/>
		<path class="st4" d="M232.6,372.5c-2.4,0-4-0.7-4.1-0.8c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5l0,0
			c0.2,0.1,4.8,2,10-1.8c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C237.6,371.9,234.8,372.5,232.6,372.5z"/>
		<path class="st4" d="M247.6,391.6c-2.4,0-4-0.7-4.1-0.8c-0.5-0.2-0.8-0.9-0.5-1.4c0.2-0.5,0.9-0.8,1.4-0.5l0,0
			c0.2,0.1,4.8,2,10-1.8c0.5-0.3,1.1-0.2,1.5,0.2c0.3,0.5,0.2,1.1-0.2,1.5C252.6,391,249.8,391.6,247.6,391.6z"/>
		<path class="st4" d="M250.7,383.3c-0.8,0-1.4-0.1-1.5-0.1c-0.6-0.1-1-0.7-0.8-1.2c0.1-0.6,0.7-0.9,1.2-0.8l0,0
			c0.2,0,5.3,0.9,9.3-4c0.4-0.4,1-0.5,1.5-0.1c0.4,0.4,0.5,1,0.1,1.5C257.1,382.7,252.9,383.3,250.7,383.3z"/>
	</g>
	<g>
		<path class="st4" d="M428.6,277.6c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.4-1.1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C429,277.6,428.8,277.6,428.6,277.6z"/>
		<path class="st4" d="M426.1,269c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.4-1.1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C426.4,268.9,426.3,269,426.1,269z"/>
		<path class="st4" d="M440.1,274.4c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4l0,0c0.2-0.1,4.5-2.6,4.6-9.1
			c0-0.6,0.5-1.1,1.1-1c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C440.5,274.3,440.3,274.4,440.1,274.4z"/>
		<path class="st4" d="M437.1,263.5c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.5-1.1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C437.4,263.4,437.3,263.5,437.1,263.5z"/>
		<path class="st4" d="M449.4,256.3c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.5-1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C449.8,256.2,449.6,256.3,449.4,256.3z"/>
		<path class="st4" d="M447.7,243.7c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.5-1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C448.1,243.6,447.9,243.7,447.7,243.7z"/>
		<path class="st4" d="M435.6,251c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.5-1,1.1-1
			c0,0,0,0,0,0c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C436,250.9,435.8,251,435.6,251z"/>
		<path class="st4" d="M444.7,234.8c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4l0,0c0.2-0.1,4.5-2.6,4.6-9.1
			c0-0.6,0.5-1,1.1-1c0,0,0,0,0,0c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C445,234.8,444.9,234.8,444.7,234.8z"/>
		<path class="st4" d="M435,235.9c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.4-1.1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C435.3,235.8,435.2,235.9,435,235.9z"/>
		<path class="st4" d="M459.3,235.5c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4c0.2-0.1,4.5-2.6,4.6-9.1c0-0.6,0.5-1.1,1.1-1
			c0.6,0,1,0.5,1,1.1c-0.1,7.7-5.5,10.7-5.7,10.9C459.6,235.4,459.5,235.5,459.3,235.5z"/>
		<path class="st4" d="M456.5,226.5c-0.3,0-0.6-0.1-0.8-0.3c-0.4-0.4-0.4-1.1,0.1-1.5c0.2-0.2,3.9-3.7,2.5-9.8
			c-0.1-0.6,0.2-1.1,0.8-1.3c0.6-0.1,1.1,0.2,1.3,0.8c1.7,7.4-2.9,11.7-3.1,11.9C457,226.4,456.8,226.5,456.5,226.5z"/>
	</g>
	<path class="st3" d="M406.6,182.8c0,0-0.1,0-0.1,0c-0.6-0.1-1-0.6-0.9-1.2c4.5-40.4-24.9-66-25.1-66.3c-0.4-0.4-0.5-1-0.1-1.5
		c0.4-0.4,1-0.5,1.5-0.1c0.3,0.3,30.5,26.6,25.9,68.1C407.6,182.4,407.1,182.8,406.6,182.8z"/>
	<path class="st3" d="M403.6,209c-0.2,0-0.4,0-0.5-0.2c-0.5-0.3-0.7-1-0.3-1.4c5.4-8.8,1.6-14.9,1.5-15.2c-0.3-0.5-0.2-1.1,0.3-1.5
		c0.5-0.3,1.1-0.2,1.4,0.3c0.2,0.3,4.7,7.4-1.4,17.4C404.3,208.8,404,209,403.6,209z"/>
	<path class="st3" d="M407.5,83.3c-0.4,0-0.7-0.2-0.9-0.5c-0.3-0.5-0.1-1.1,0.4-1.4L443.9,60c0.5-0.3,1.1-0.1,1.4,0.4
		c0.3,0.5,0.1,1.1-0.4,1.4l-36.9,21.3C407.9,83.2,407.7,83.3,407.5,83.3z"/>
	<path class="st3" d="M183,249.3c-0.4,0-0.7-0.2-0.9-0.5c-16.8-29.2-6.2-72-6.1-72.4c0.1-0.6,0.7-0.9,1.3-0.8
		c0.6,0.1,0.9,0.7,0.8,1.3c-0.1,0.4-10.5,42.4,5.9,70.9c0.3,0.5,0.1,1.1-0.4,1.4C183.4,249.2,183.2,249.3,183,249.3z"/>
</g>
</svg>



  </div>
<!-- partial -->
<img src="grafica/Immagini/exit.svg" onclick="closeTabWithSafetyNet()" alt="Close Tab" class="exit"></img>

<script>
  function closeTabWithSafetyNet() {
    if (confirm("Sei sicuro di voler uscire?")) {
      location.href = 'logout.php';
    }
  }
</script>
  <script src='/login_page/sfondo.js'></script><script  src="/login_page/script.js"></script>

 	<!--Menu Script-->
  	<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="../Menu/script.js"></script>
  	<!--------------->
</body>
</html>
