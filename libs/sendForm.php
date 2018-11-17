<?php

  if($_POST) {
    
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
      echo "Preenche corretamente o formulário!";
    } else {
      $name = utf8_decode($_POST['name']);
      $email = utf8_decode($_POST['email']);
      $message = utf8_decode($_POST['message']);
      
	    $subject	= 'Contact Form - Madomo Planet';
	    require_once('phpmailer/class.phpmailer.php');
      
      $Email = new PHPMailer();
      $Email->IsSMTP();
      $Email->SMTPAuth = true;
      $Email->Host = 'smtp.gmail.com';
      $Email->Port = '587';
      $Email->SMTPSecure = 'tls';
      $Email->Username = 'madomoplanet.contact@gmail.com';
      $Email->Password = 'H1at0963';
      $Email->IsHTML(true); 
      $Email->From = $email;
      $Email->SMTPDebug = 2;

      $Email->FromName = ($name);
      $Email->AddReplyTo($email, $name);
      $Email->AddAddress("madomoplanet.contact@gmail.com");
      //$Email->AddCC('email@hotmail.com', 'Nome da pessoa'); // Copia
      $Email->AddBCC('madomo.planet@gmail.com', 'Madomo Planet - Oficial'); // Cópia Oculta

      $Email->Subject = utf8_decode($subject);
      $Email->Body .= "<br/>
      <b>Nome: </b> $name <br/>									
      <b>E-mail:</b> $email <br/>
      <b>Mensagem:</b> $message <br/>";	

      if(!$Email->Send()){				
        echo '
        <script>
          $(document).ready(function(){
            swal("Ops...","Houve um erro ao enviar a mensagem, tente novamente!", "error");
          });
        </script>';
      } else {
        echo '
        <script>
        $(document).ready(function(){
          swal("Sucesso", "Sua mensagem foi enviada. \n Obrigado pelo contato!", "success");
        });
        </script>';
	    }	
    }

  }