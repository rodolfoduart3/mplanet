<?php 
  // Buscar informações de linguagem em arquivo JSON 
  require_once('language/load_language.php');
?>

<!DOCTYPE html>
<html>
  
  <?php // Carregando elementos do HEAD ?>
  <?php include('blocks/head.php') ?>

  <body>
    
    <?php // Carregando barra de navegação ?>
    <?php include('blocks/navbar.php'); ?>
    
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container coverContainer">
          <img src="img/coverart-principal.jpg" alt="Cover Art - Smile Album">
        </div>
      </div>
      <div class="parallax">
        <?php /* <img src="img/bkg-2.jpg" alt=""> */ ?>
        <img src="img/bkg-1.jpg" alt="">
      </div>
    </div>
    
    <?php // Motivos da criação do álbum ?>
    <?php include('blocks/infoAlbum.php') ?>
    
    <?php // Slider com descrição de cada música  ?>
    <?php include('blocks/musics.php') ?>

    <div class="parallax-container valign-wrapper footer-parallax">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <div class="extern-players footer-box">
              <h5 id="moreMusic_soundcloud_footer"></h5>
              <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/524398173&color=%23262626&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>
            <div class="extern-players footer-box">
              <h5 id="moreMusic_spotify_footer"></h5>
              <iframe src="https://open.spotify.com/embed/album/6x67mVt9LX9j0JkcDR4qNh" width="100%" height="450" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="img/bkg-1.jpg" alt=""></div>
    </div>
    
    <?php // InstaFeed e Redes Sociais ?>
    <?php include('blocks/footer.php') ?>
    
    <?php // Carregando Scripts JS ?>
    <?php include('blocks/scripts.php') ?>

  </body>

</html>