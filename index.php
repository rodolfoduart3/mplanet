<?php 
  //require_once('language/portuguese.php');
  require_once('language/english.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Madomo Planet | Music</title>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="..." />
  <meta name="robots" content="..." />
  <meta name="keywords" content="...." />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="icon" href="#" type="image/x-icon" />
  <link rel="shortcut icon" href="#" type="image/x-icon" />  
  
  <meta name="theme-color" content="#000">
  <meta name="msapplication-navbutton-color" content="#000">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  
  <div class="navbar-fixed">
    <nav role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo center">
          <img src="img/logo-white.png" alt="Logo Madomo Planet - Home">
        </a>
        
        <span class="right iconTranslate">
          <i class="material-icons">translate</i>
          <ul class="right listFlags no-display">
            <li class="flagImage">
              <span><img src="img/flags/br_flag.png" alt="Portuguese Language"></span>
            </li>
            <li class="flagImage">
              <span><img src="img/flags/uk_flag.png" alt="English Language"></span>
            </li>
            <li class="flagImage">
              <span><img src="img/flags/sp_flag.png" alt="Spanish Language"></span>
            </li>
          </ul>
        </span>
        <ul id="nav-mobile" class="sidenav">
          <li><a href="#"><?php echo $bio; ?></a></li>
          <li><a href="#"><?php echo $music; ?></a></li>
          <li><a href="#"><?php echo $contact; ?></a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container coverContainer">
        
        <img src="img/coverart-principal.jpg" alt="Cover Art - Smile Album">
        
        <?php /* 
        <h1 class="header center">Madomo Planet</h1>
        <h2 class="center">...</h2>
        */ ?>
        
      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>
  
  <section class="main-information">
    <div class="container">
      <h3 class="title-section center"><?php echo $mainInfo_title; ?></h3>
      <p class="desc-section center"><?php echo $mainInfo_desc; ?></p>
      <div class="extern-players">
        <iframe src="https://open.spotify.com/embed/user/madomoplanet/playlist/5o4udqpVjbQtbvFXwRqiB5" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </section>
  
  <section class="album-description">
    <div class="container center">
      <p><?php echo $albumDescription_p1; ?></p>
      <p><?php echo $albumDescription_p2; ?></p>
      <p><i><?php echo $albumDescription_p3; ?></i></p>
      <p><?php echo $albumDescription_p4; ?></p>
      <p><?php echo $albumDescription_p5; ?></p>
      <p><?php echo $albumDescription_p6; ?></p>
    </div>
  </section>

  <section class="container musics">
    <h4 class="center title-section"><?php echo $musics_title; ?></h4>
    <div class="row musics-description">
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track1_title; ?></h5>
          <p><?php echo $musics_track1_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track2_title; ?></h5>
          <p><?php echo $musics_track2_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track3_title; ?></h5>
          <p><?php echo $musics_track3_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track4_title; ?></h5>
          <p><?php echo $musics_track4_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track5_title; ?></h5>
          <p><?php echo $musics_track5_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track6_title; ?></h5>
          <p><?php echo $musics_track6_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track7_title; ?></h5>
          <p><?php echo $musics_track7_desc; ?></p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track8_title; ?></h5>
          <p><?php echo $musics_track8_desc; ?></p>
        </div>
      </div>        
      <div class="col s12 m6">
        <div class="music-block">
          <h5 class="music-name"><?php echo $musics_track9_title; ?></h5>
          <p><?php echo $musics_track9_desc; ?></p>
        </div>
      </div>
    </div>
  </section>
  
  <div class="container production-block">
    <h5 class="title"><?php echo $production_title; ?></h5>
    <ul>
      <li><b><?php echo $production_item1 ?></b> - <?php echo $production_item2 ?></li>
      <li><b><?php echo $production_coverArt1 ?></b> - <?php echo $production_coverArt2 ?></li>
      <li><b><?php echo $production_label1 ?></b> - <?php echo $production_label2 ?></li>
    </ul>
  </div>

  <div class="parallax-container valign-wrapper footer-parallax">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <div class="extern-players footer-box">
            <h5><?php echo $moreMusic_soundcloud_footer; ?></h5>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/524398173&color=%23262626&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
          </div>
          <div class="extern-players footer-box">
            <h5><?php echo $moreMusic_spotify_footer; ?></h5>
            <iframe src="https://open.spotify.com/embed/album/6x67mVt9LX9j0JkcDR4qNh" width="100%" height="450" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 3"></div>
  </div>
  
  <div class="boxInstafeed"></div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Madomo Planet</h5>
          <p class="grey-text text-lighten-4">
            DJ/Produtor brasileiro que tem uma única finalidade, fazer com que sua música quebre barreiras, conquistando seu espaço e admiração à cada evento. Com sua forte identidade sonora, Madomo Planet caminha em meio ao Techno, e aos poucos vai escrevendo sua história na cena.
            Projeto criado no fim de 2016 que já vem ganhando destaque com lançamentos em labels como: Piko Music (ITA), Warbeats Records (BRA) e Underxpression Records (BRA). Em constante evolução é possível dizer que isso é apenas o começo, e tenha certeza que Madomo Planet é o nome da ascensão.
          </p>
        </div>
        <div class="col m6 s12">
          <h5 class="white-text">Redes Sociais</h5>
          <span>@madomoplanet</span>
          <ul>
            <li class="icon-facebook">
              <a href="https://www.facebook.com/madomoplanet/" target="_blank" class="white-text" title="Curta a página no Facebook">
                Facebook
              </a>
            </li>
            <li class="icon-instagram">
              <a href="https://www.instagram.com/madomoplanet/" target="_blank" class="white-text" title="Siga o perfil no Instagram">
                Instagram
              </a>
            </li>
            <li class="icon-spotify">
              <a href="https://open.spotify.com/artist/3Tjr18QeY3xd7qbAtggbEF" target="_blank" class="white-text" title="Siga o perfil no Spotify">
                Spotify
              </a>
            </li>
            <li class="icon-globe">
              <a href="https://www.beatport.com/artist/madomo-planet/627380" target="_blank" class="white-text" title="Compre as músicas pelo Beatport">
                Beatport
              </a>
            </li>
            <li class="icon-youtube-play">
              <a href="https://www.youtube.com/channel/UCkmosc1F3k47x28Td-4crAg" target="_blank" class="white-text" title="Inscreva-se no canal do YouTube">
                YouTube
              </a>
            </li>
            <li class="icon-email">
              <a href="mailto:madomo.planet@gmail.com" target="_blank" rel="me nofollow" title="Contato para Remixes & Promos">
                Remixes & Promos
              </a>
            </li>
            <li class="icon-mixcloud">
              <a href="https://www.mixcloud.com/madomoplanet/" target="_blank" title="Ouça os Live Sets no Mixcloud">
                Mixcloud
              </a>
            </li>
            <li>
            
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                ">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
              </form>

            </li>
            
            
          </ul>
        </div>
        <!-- <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div> -->
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
        <span>Made by PLAN3T</span>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>

</body>

</html>