<?php require_once('language/load_language.php'); ?>

<!DOCTYPE html>
<html>
  <?php include('blocks/head.php') ?>
  
  <body class="bio-page">
    <?php include('blocks/navbar.php'); ?>
    
    <section class="container bioInformation">
      <h4 class="center title-section" id="bio_title"></h4>
      <p class="infoAbout" id="aboutMe"></p>
    </section>
    
    <section class="container presskitBox">
      <div id="mosaicBio">
        <img src="./img/presskit/presskit-01.jpg" height="350">
        <img src="./img/presskit/presskit-03.jpg" height="350">
        <img src="./img/presskit/presskit-02.jpg" height="350">
      </div>
      <figure class="imagotipo">
        <img src="./img/presskit/imagotipo-white.png" alt="Logotipo1" alt="Logotipo1">
      </figure>
    </section>
    
    <footer>
      <?php include('blocks/footer.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
    
  </body>
</html>