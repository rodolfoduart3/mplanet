<?php require_once('language/load_language.php'); ?>

<!DOCTYPE html>
<html>
  <?php include('blocks/head.php') ?>
  
  <body class="bio-page">
    <?php include('blocks/navbar.php'); ?>
    
    <h2 class="forIndexation">Biography</h2>
    
    <section class="container bioInformation">
      <h4 class="center title-section" id="bio_title">Biografia</h4>
      <p class="infoAbout" id="aboutMe">DJ/Produtor brasileiro que tem uma única finalidade, fazer com que sua música quebre barreiras, conquistando seu espaço e admiração à cada evento. Com sua forte identidade sonora, Madomo Planet caminha em meio ao Techno, e aos poucos vai escrevendo sua história na cena. Projeto criado no fim de 2016 que já vem ganhando destaque com lançamentos em labels como: Piko Music (ITA), Warbeats Records (BRA) e Underxpression Records (BRA). Em constante evolução é possível dizer que isso é apenas o começo, e tenha certeza que Madomo Planet é o nome da ascensão.</p>
    </section>

    <section class="container presskitBox">
      <div id="mosaicBio">
        <img src="./img/presskit/presskit-01.jpg" height="350" alt="Presskit Photo">
        <img src="./img/presskit/presskit-03.jpg" height="350" alt="Presskit Photo">
        <img src="./img/presskit/presskit-02.jpg" height="350" alt="Presskit Photo">
      </div>
      <figure class="imagotipo">
        <img src="./img/presskit/imagotipo-white.png" alt="Logotipo1" alt="Logo Madomo Planet">
      </figure>
    </section>
    
    <footer>
      <?php include('blocks/footer.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
    
  </body>
</html>