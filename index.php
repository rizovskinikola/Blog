<?php

require_once 'db.php';
require_once 'fetchcards.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../navbar.css">
    <link href="style.css" rel="stylesheet">
    <link href="../mainstyle.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b8af01290.js" crossorigin="anonymous"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YL1CPSQS6V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YL1CPSQS6V');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1035355803890631'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1035355803890631&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->



</head>
<body>
<?php
if(!defined("SITE_URL"))
    define("SITE_URL", "https://creativehubkos.com/");
?>


<header id="navbar_top">
<script> 
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
</script>
  <div class="navbarInfo">
    <div>
        <!---ms auto to alling items right-->
        <ul id="lists">
                <li>
                    <a href="tel:+383 49 334 437 " class="nav-link">
                        <i class="fa fa-phone" style="color: #FFBD11" aria-hidden="true"></i>
                          +383 49 334 437  
                    </a>
                </li> 
                <li>
                    <a href="#" class="nav-link">
                        <img src="../Images/kosovo.png">
                        Kosovo</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg  py-3 ">
        <div class="container" id="navContainer">
            <a href="<?php echo SITE_URL; ?>" class="navbar-brand"><img src="../Images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
                 <div class="hamburger" >
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
              </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <!---ms auto to alling items right-->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="<?php echo SITE_URL; ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Academies
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>hr">HR</a></li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>digital-marketing">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>data-science">Data Science</a></li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>graphic-design">Graphic Design</a></li>
                        <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>front-end">Front-end</a></li>
                      </ul>
                    </li>   
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL; ?>blog">Our Students</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL;?>HiringPlatform" target="_blank">Hiring Platform</a>
                    </li>
                                        <li class="nav-item">
                      <a class="nav-link" href="<?php echo SITE_URL;?>Hakaton" target="_blank">Hackathon</a>
                    </li>
               
                  </ul>
            </div>
        </div>
         </nav>
</header>
<button onclick="topFunction()" id="myBtnScroll" title="Go to top"> <img src="../Images/arrow.png"></button>

    <!-- header -->

    <div class="col-md-12 text-center header-text">
    <div class="bg-1"><img src="img/main_image.png" alt=""></div> 
    <div class="bg-2"><img src="img/main_image_1.png" alt=""></div> 

   <div class="header-absolute" style="font-weight:400;">Latest News from our Blog</div>
    </div>


        <form action="singlepage.php" method="$_GET">
        <div class="container-fluid blog-mobile">
                    <div class="row">
            <?php foreach($cards as $row) { ?> 
                <div class="col-md-4 cards">  
                <button id="id" name="id" type="submit" value="<?= $row['id'] ?>" > 
                <span class="blue"><?= $row['blue'] ?></span>
                <div class="card" style="height:475px;">
                <div class="img-hover-zoom">
                            <img src="img/<?= $row['img'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['card_title'] ?></h5>
                            <p class="card-text"><?= $row['card_text'] ?></p>
                            <small><i class="far fa-clock"></i> <?= $row['date'] ?></small>
                        </div>
                    </div>
                    </button>
                </div>
         <?php } ?>

            </form>
        <br>  
        <div class="col-md-12 text-center load-more"><div class="btn btn-dark" id="loadMore">Load More</div></div>

    <footer class="container-fluid" id="theFooter">
     <div class="row" style="padding: 30px 0 10px 0;">
   <div class="col-md-4 text-center">
     <ul style="list-style-type: none;">
       <li><img src="img/footerlogo.png"> </li>
       <li><img src="img/footerline.png"></li>
       <li id="socialmedia"> <a href="https://www.facebook.com/creativehubkosovo"  target="_blank"><img src="img/FacebookLogo.png"></a> 
        <a href="https://www.linkedin.com/company/28931657" target="_blank"><img src="img/LinkedinLogo.png"></a> 
        <a href="https://www.instagram.com/creativehubkosovo/?hl=en"  target="_blank"><img src="img/InstagramLogo.png"></a> </li>
     </ul>
   </div>
   <div class="col-md-4 text-center">
    <h4>Your developement hub.</h4>
    <p>Gain knowledge, connect and find your perfect career path.</p>
   </div>
   <div class="col-md-4 text-center">
    <ul style="list-style-type: none;">Contact:
      <li>contact@cretivehubkos.com</li>
      <li> +383 49 334 437</li>
    </ul>
   </div>

  </div>


    
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>

</html>