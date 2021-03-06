<?php 

  if($_POST) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
      echo "Fill out the form correctly!";
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
      //$Email->AddCC('email@hotmail.com', 'Name');
      $Email->AddBCC('madomo.planet@gmail.com', 'Madomo Planet - Oficial');

      $Email->Subject = utf8_decode($subject);
      $Email->Body .= "<br/>
      <b>Name: </b>" . $name . "<br/>								
      <b>Email: </b>" . $email ."<br/><br/>
      <b>Message: </b><br/>" . nl2br($message) . "<br/>";	

      if(!$Email->Send()){				
        echo 'There was an error sending the message, please try again!';
        header('HTTP/1.1 500 Internal Server Error');
      } else {
        echo 'Thank you! <br/> I will return your message as soon as possible.';
	    }
    }
  }
  
?>