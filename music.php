<?php require_once('language/load_language.php'); ?>

<!DOCTYPE html>
<html>
  <?php include('blocks/head.php') ?>
  
  <body>
    <?php include('blocks/navbar.php'); ?>
    
    <section class="container">
      <ul class="tabs">
        <li class="tab col s3">
          <a class="active" href="#tab-musics-spotify">
            <i class="icon-spotify"></i>
            <span>Spotify</span>
          </a>
        </li>
        <li class="tab col s3">
          <a href="#tab-musics-soundcloud">
            <i class="icon-soundcloud"></i>
            <span>Soundcloud</span>
          </a>
        </li>
        <li class="tab col s3">
          <a href="#tab-musics-mixcloud">
            <i class="icon-mixcloud"></i>
            <span>Mixcloud</span>
          </a>
        </li>
      </ul>
      
      <div id="tab-musics-spotify" class="col s12">
        <?php // EP - Keep Trying ?>
        <iframe src="https://open.spotify.com/embed/album/6x67mVt9LX9j0JkcDR4qNh" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        
        <?php // Single - Poison Lips ?>
        <iframe src="https://open.spotify.com/embed/album/0VrRrvstTComn2qaSg27Fd" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        
        <?php // EP - Old West ?>
        <iframe src="https://open.spotify.com/embed/track/5SkrcdI2HLTA1vGi1wOQHy" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        
        <?php // EP - Reborn ?>
        <iframe src="https://open.spotify.com/embed/album/2cHBjoxyEkvRdPRc9wzydp" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        
        <?php // Single - Give Us Time ?>
        <iframe src="https://open.spotify.com/embed/album/2dIjmH45RSaeFnv54X2mej" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        
        <?php // EP - Scaring ?>
        <iframe src="https://open.spotify.com/embed/album/6y9Tbb8Y17gMlF7gLpFRbh" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
      
      <div id="tab-musics-soundcloud" class="col s12">
        
        <?php // EP - Keep Trying ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/524398173&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
        <?php // EP - Old West ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/408378656&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
        <?php // Single - Aphotic ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471607815&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
        <?php // Single - Poison Lips ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/395055084&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>      
        
        <?php // Single - Puppet ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/330435846&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
        <?php // Single - Give Us Time ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/348724270&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
        <?php // EP - Reborn ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/405533942&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
        <?php // EP - Scaring ?>
        <iframe width="100%" height="130" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/340295200&color=%236c6c6c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=false&visual=false"></iframe>
        
      </div>
      
      <div id="tab-musics-mixcloud" class="col s12">
        <iframe width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&feed=%2Fmadomoplanet%2Fmadomo-planet-influences-001%2F" frameborder="0" ></iframe>
      </div>
    
    </section>
    
    
    
    
    <footer>
      <?php include('blocks/footerFixed.php') ?>
    </footer>
    
    <?php include('blocks/scripts.php') ?>
    
  </body>
</html>