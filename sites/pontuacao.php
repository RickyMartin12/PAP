<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Pontuação</title>
     <?php
        include 'content/header.php';
     ?>
    
     <!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
     <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>

    	<link  type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
     </head>
     <body>
<!--==============================header=================================-->
<?php
        include 'content/menu_pontuacao.php';
?>
<!--=======content================================-->
<div class="content">
  <div class="container_12 ">
    <div class="grid_4">
      <center><h3>Pontuação das Cartas</h3></center>
      <div class="MagicSlideshow" data-options="height:187px;width:400px;fullscreen: true; effect: fade;">
        <img src="img/d.jpg" data-fullscreen-image="img/d.jpg"/>
        <img src="img/b.jpg" data-fullscreen-image="img/b.jpg"/>
        <img src="img/d.jpg" data-fullscreen-image="img/d.jpg"/>
        <img src="img/points.jpg" data-fullscreen-image="img/points.jpg"/>
      </div>
    </div>
    <div class="grid_8 emp_box">
      <h3>Caracteristicas da pontuação das cartas no blackjack</h3>
    <div class="grid_10">
            <ul class="list li">
              <li class="list_count">1</li>
              <li class="extra_wrapper">
                <div class="text1 color2">Numeração das cartas</div>
                As cartas de 2 a 10 têm o número de pontos de acordo com o valor inicial.                                                         
              </li>
            </ul>
            <br>
            <ul class="list li">
              <li class="list_count">2</li>
              <li class="extra_wrapper">
                <div class="text1 color2">Figuras das cartas</div>
                Todas as cartas de figuras valem 10 pontos.
              </li>
            </ul>
            <br>
            <ul class="list li">
              <li class="list_count">3</li>
              <li class="extra_wrapper">
                <div class="text1 color2">Valores dos Ases</div>
                Os ases podem valer 1 ou 11 pontos.
              </li>
            </ul>

    </div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="clear"></div>
  </div>
</div>
<!--==============================footer=================================-->

<!--==============================footer=================================-->

<?php
  include 'content/footer.php';
?>

</body>
</html>