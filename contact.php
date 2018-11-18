<?php require_once('language/load_language.php'); ?>

<!DOCTYPE html>
<html>

  <?php include('blocks/head.php') ?>

  <body class="contact-page">
    
    <?php include('blocks/navbar.php'); ?>
    
    <h2 class="forIndexation">Contact</h2>
    
    <section class="container">
      <div class="row formContact">
        <h1 class="title-section" id="contact_title"></h1>
        <form id="form_contact" method="post" action="libs/sendForm.php" class="col s12">
          <div class="row">
            <div class="input-field col s12 m6">
              <input type="text" name="name" required />
              <label for="name" id="name_contact"></label>
            </div>
            <div class="input-field col s12 m6">
              <input type="email" name="email" required />
              <label for="email" id="email_contact"></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea name="message" class="materialize-textarea" required></textarea>
              <label for="message" id="message_contact"></label>            
            </div>
          </div>
          <div class="row boxBtn">
            <button type="submit" name="button" class="btn" id="btn_contact"></button>
          </div>
        </form>
        <div class="boxLoading">
          <img src="img/loading.gif" class="loadingImg" alt="Processing Form">
        </div>
      <div class="showMessage" style="background-color:#FFF;color:#000;text-align:center;"></div>
      </div>
      
    </section>
    
    <footer>
      <?php include('blocks/footer.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
  
  </body>
</html>