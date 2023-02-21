<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <link rel="stylesheet" href="assets/SCSS/style.css">
    <link rel="stylesheet" href="assets/SCSS/styletwo.css">
    <link rel="stylesheet" href="assets/SCSS/mobil.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Mulish:wght@400;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@800&display=swap" rel="stylesheet">


    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    
<header class="header">
    <div class="menu">
    <div class="logo"><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="" class="img-logo"></a></div>
    <div class="li-menu">
        <ul class="ul-m">
            <a href=""><li class="actives">Home</li></a>
            <a href=""> <li class="li-m">TV Shows</li></a>
                <a href=""> <li class="li-m">Movies</li></a>
                    <a href=""><li class="li-m">Series</li></a>
        </ul>
    </div>
    <div class="prof">
        <button class="butt-inf try" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Try Now</button>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Form</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <form>
            <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="13" title="Контактная форма"]') ?>
            </div>
        </form>
      
            <!-- Modal footer -->
            <div class="modal-footer">
                <form action="">
            <?php echo do_shortcode('[contact-form-7 id="14" title="button"]') ?>
</form>
            </div>
        
          </div>
        </div>
      </div>
    </div>
    <div class="film">
        <div class="info">
            <div class="name"><h1 class="h1-name">Zack Snyder's Justice League</h1></div>
            <div class="reyt">
                <h1 class="years">2021</h1>
                <button class="old">18+</button>
                <h2 class="years time">4h 2min</h2>
                <h3 class="years">8.8</h3>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="" class="star">
            </div>
            <div class="txt">
                <p class="p-txt">Determined to ensure Superman's ultimate sacrifice was not in vain, Bruce Wayne aligns forces with Diana Prince with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions.</p>
            </div>
            <div class="butt">
                <a href=""> <button class="butt-watch"><img src="<?php bloginfo('template_url'); ?>/assets/img/watch.svg" alt="" class="watch-img">Watch</button></a>
                    <a href=""><button class="butt-inf">More information</button></a>
            </div>
            
        </div>
        <div class="img-film"><img src="<?php bloginfo('template_url'); ?>/assets/img/img-film.png" alt="" class="films"></div>
    </div>
</header>