<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Jogadas</title>
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
        include 'content/menu_rodada.php';
?>
<!--=======content================================-->
<div class="clear"></div>
<div class="bg1">
<div class="container_12">
  <div class="grid_12">
  <br>
  <br>
    <div class="slider" >
      <div>
      <div id="camera" >
                 <div data-src="img/blackjack-strategy-chart.jpg">

                 </div>
                 <div data-src="img/blackjack-strategy.gif">

                 </div>
               </div>
          </div>
        </div>
      </div>
          <div class="grid_8 emp_box">
          <br>
            <div class="grid_10">
                <ul class="list li">
                  <li class="stand"></li>
                  <li class="extra_wrapper">
                    <div class="text1 color2">Stand(Manter)</div>
                    Pertence um dos 4 tipos de jogadas do blackjack em que o jogador está satisfeito com a mão;                                                        
                  </li>
                </ul>
                <br>
                <ul class="list li">
                  <li class="hit"></li>
                  <li class="extra_wrapper">
                    <div class="text1 color2">Hit (Batida)</div>
                    Pertence um dos 4 tipos de jogadas do blackjack em que o jogador quer ou aceita mais uma carta;
                  </li>
                </ul>
                <br>
                <ul class="list li">
                  <li class="double"></li>
                  <li class="extra_wrapper">
                    <div class="text1 color2">Double (Dobro)</div>
                    Pertence um dos 4 tipos de jogadas do blackjack em que jogador sente que necessita de uma carta adicional pode dobrar a aposta e de ser atribuída mais uma carta, boa ou má.
                    Esta opção é oferecida somente nas duas primeiras cartas, e às vezes nas duas primeiras cartas após de Separar;
                  </li>
                </ul>
                <br>
                <ul class="list li">
                  <li class="split"></li>
                  <li class="extra_wrapper">
                    <div class="text1 color2">Split (Separar ou Dividir)</div>
                    Pertence um dos 4 tipos de jogadas do blackjack em que os primeiros dois cartões do jogador são de valor igual em pontos pode separa-ló em duas mãos.
                    Nesta jogada cada carta é a primeira carta de uma mão nova.
                    O jogador deve também fazer uma outra aposta do valor igual à primeira para a segunda mão.
                    O jogador pode separar 2 ou 3 vezes consecutivas se houver outra oportunidade de se apostar.
                    Fazer Double das cartas após de separar é permitido mas nem sempre;
                  </li>
                </ul>
                <br>
                <ul class="list li">
                  <li class="flag"></li>
                  <li class="extra_wrapper">
                    <div class="text1 color2">Surrender (Render)</div>
                    É quando alguns casinos oferecem ao jogador a opção de render nas primeiras duas cartas.
                    Se o jogador não gostar das cartas pode perder a metade da aposta assim as suas cartas.
                    Esta opção é oferecida depois que o Deller verifica para ver se há o blackjack é conhecido como "a rendição atrasada.";
                  </li>
                </ul>
                <br>

    </div>
    </div>

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