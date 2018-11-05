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
  
  <nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Madomo Planet</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><?php echo $bio; ?></a></li>
        <li><a href="#"><?php echo $music; ?></a></li>
        <li><a href="contact.php"><?php echo $contact; ?></a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#"><?php echo $bio; ?></a></li>
        <li><a href="#"><?php echo $music; ?></a></li>
        <li><a href="#"><?php echo $contact; ?></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center">Madomo Planet</h1>
        <h2 class="center">...</h2>
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
            <h5 class="music-name"><?php echo $musics_track2_title ?></h5>
            <p>
              A multidão está ao redor mas a solidão ainda está presente. Te consumido por completo. 
              Force o seu grito interior suplicar por felicidade. Sim, é quase impossível. Quase.
              Mas já que para tudo existe uma saída, para todo tipo de ausência, existe a presença do seu "eu". Apodere-se do sorriso e não deixe a angústia sufocar.
            </p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">03 - Dissipate</h5>
            <p>
              Preso no meio de tanta ignorância. Não esqueça de "ser" humano. 
              Deixe sua bondade falar mais alto que seu ego. Você consegue. 
              Esqueça por um instante sua singularidade. <strong>Seja plural</strong>.
            </p>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">04 - Thinking</h5>
            <p>
              Expresse ao próximo o real motivo da sua existência. Se você ainda não a encontrou, não tenha medo de descobrir. 
              Reflita sobre tudo e sobre todos. <strong>Reflita que o amanhã pode nem ao menos existir</strong>. 
              Se está tudo bagunçado na mente, organização será seu dogma. Apenas você sabe o que é realmente válido levar consigo agora.
            </p>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">05 - Inside the Groove</h5>
            <p>
              Feche os olhos e deixe seu próprio corpo responder aos comandos. 
              Siga as instruções à risca e faça com que o ritmo lhe apodere. Simples. Apenas se entregue ao momento.
              Isso vai ser mais forte que tudo. <strong>Você vai ser mais forte que tudo</strong>.
            </p>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">06 - Plot of Fear</h5>
            <p>
              A rotina destrói sonhos. Aos poucos, eles se ofuscam mais e mais. 
              Lute. Busque. Creia. Não deixe eles de lado. Nunca. 
              Ninguém tem o direito de tirar eles de você.
              Ninguém sabe o que você passou todos esses anos. 
              E quando tudo implicar à desistência, <strong>desista apenas do que lhe impede</strong>. 
            </p>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">07 - Focus</h5>
            <p>
              O caminho à ser trilhado dependerá inteiramente das suas decisões. 
              Quando sentir que o foco está sendo sobreposto, <strong>batalhe pelo autocontrole</strong>.
              Inevitável e sem possibilidade de fuga. Dedique-se aos seus problemas. Eles precisam de solução.
            </p>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">08 - Voltage</h5>
            <p>
              Mente inquieta. Cíclico e atormentador. O conflito interno agora predomina.
              Sempre existirão consequências, mas no final um único vencedor.
              E se neste momento não estiver no topo, <strong>sua meta agora é alcançá-lo</strong>.
            </p>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="music-block">
            <h5 class="music-name">09 - Dark Side</h5>
            <p>
              Basicamente nada será básico. Não adianta complicar mais o que já é complicado por natureza. 
              Questione. Busque. Não fuja das imperfeições. 
              <strong>E no momento que a escuridão tomar conta, seja luz</strong>.
            </p>
          </div>
        </div>
        
        <?php /* 
        <!-- <div class="col s12 m6">
          <div class="music-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="music-name">Produção</h5>
            <p class="light">
              Criação, conceito, mixagem e masterização - Rodolfo Ferrarini.
              Cover Art - Henrique Petrus / Fulano de Tal.
              Gravadora - Trip to Enceladus.
            </p>
          </div>
        </div> -->
        */ ?>
        
      </div>
      
  </section>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

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
                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHNwYJKoZIhvcNAQcEoIIHKDCCByQCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAix0hIwpvtr20/sKtTMx5vKRWzp8Yg8A13tTD3XAIIMh45Yysj5igJa9OKrBFNnMpwyyhX4DFhrFi0KhMvKpGkrlZAbijB7l69ZCyGzN4CMZZikSNJMtawZIDnTlsUT8x73F1Xz180gqxTcXG2UvIbh58zWVsWjVlR4X2urNOMxTELMAkGBSsOAwIaBQAwgbQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIeGHnnbAPGDuAgZA06zjOQg1S92F4A2XqrjuuXEki0D0rgKlxwqdEqVaB8oLA0beobTdXFdAReLWxxDdf3U4ILXnAyW5VbQRVeMTfB2e2gfBKmMJR51/+AQ4N2+YceUzkSwGNEKSL02iPhgdVFdNXOKsVLm8eQeOuIfmpuLfN9MXJqxGilCuGxd6gNgz8KjxnWBJVUi+ur97qvm2gggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xODEwMjgxNjMyMTVaMCMGCSqGSIb3DQEJBDEWBBRbCXtkwt2+YJOiflhe/6VcWrm7CTANBgkqhkiG9w0BAQEFAASBgJAolUHT0cd3rtZyNGtkIPE9vg192X2tzRAlzzQrlGKPnIHi0t6qwO1JVczUCQiuvZ5dSBOyx7YLhSBW7SZuuURARrjN1+nW2sZAqzFHMtCRLwIQQHtpzR/At70gCUrIIa8xbpCqSBehYBPCJ1Xbil7gXtlcxTSl2biCrkU62eLt-----END PKCS7-----
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