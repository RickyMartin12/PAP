<?php

session_start();

$captcha = $_SESSION['captcha_key'];

if( isset($_POST['button']))
{
  if (!empty($_POST['value']))
  {
    $value = $_POST['value'];
    if ($value == $captcha)
    {
      echo "Dados preenchidos com sucesso<br>";
    }
  }
  else
  {
    echo "O Captcha é invalido<br>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>

     <?php
        include 'content/header.php';
     ?>
     
     </head>
     <body>
<!--==============================header=================================-->
<!--==============================header=================================-->

<?php
        include 'content/menu_contactos.php';
?>


<!--=======content================================-->
<div class="content">
  <div class="container_12">
    <div class="grid_5">
      <div class="pad3">
        <center><h3>Informação do Contacto</h3></center>
              <div class="map">
              <figure class="">
                      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="642" height="443" src="https://maps.google.com/maps?hl=en&q=Avenida Dom João VI, Olhão&ie=UTF8&t=roadmap&z=16&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">
                  embedgooglemaps.com
              </a></small></div><div><small><a href="https://ww.premiumlinkgenerator.com/">premium link generator</a></small></div></iframe>
                 </figure>
                <div class="text1">Ricardo Peleira - Aluno IST (MISE - Mestrado Informação e Sistemas Empresariais) </div>
                <address>
                              <dl>
                                  <dt>
                                      Avenida Dom João VI<br>
                                      111ª Segundo Frente (2ºF)
                                  </dt>
                                  <dd><span>Telemóvel:</span>963354089</dd>
                                  <dd><span>Telefone:</span>289707181</dd>
                                  <dd>E-mail: <a href="#" class="link-1">r.peleira@hotmail.com</a></dd>
                              </dl>
                           </address>
                          
            </div>
      </div>
    </div>
    <div class="grid_7">
      <center><h3>Formulário de Contactar</h3></center>
      <form id="form" action='contactos.php'method='post'>
      <div class="success_wrapper">
      <div class="success">Contact form submitted!<br>
      <strong>We will be in touch soon.</strong> </div></div>
      <fieldset>
      <label class="name">
      <input type="text" value="Name:">
      <br class="clear">
      <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="email">
      <input type="text" value="E-mail:">
      <br class="clear">
      <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="phone">
      <input type="tel" value="Phone:">
      <br class="clear">
      <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="message">
      <textarea>Message:</textarea>
      <br class="clear">
      <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>

      <label>
      <br>
        <input type='text' name='value' value="Captcha"><br>
        <span class="error">*The captcha does not valid.</span> <span class="empty">*This field is required.</span> 
        <br>
        <br>
        <img src='captcha.php'></img><br>
        </label>
      <div class="clear"></div>

      <div class="btns"><a data-type="reset" class="btn">clear</a><a data-type="submit" name="button" class="btn">submit</a>
      <div class="clear"></div>
      </div></fieldset></form>
    </div>
  </div>
</div>


<!--==============================footer=================================-->

<?php
  include 'content/footer.php';
?>


</body>
</html>

