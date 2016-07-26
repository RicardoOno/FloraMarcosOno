<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flora Ono</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sandbox2.css" rel="stylesheet">
    <!--            <link href="../css/meu.css" rel="stylesheet" />-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>

<body>
  <?php
  $img= 'imgnep';
  $texto1='Nephentes';
  $texto2 ='The most catcher of bug';
  include '../partes/nav.php';
  ?>
<div class="container ">
      <?php
      $sell = 'What means:
              <ul>
                  <li><b>P</b>: Seedlings (1 year)</li>
                  <li><b>M</b>: Medium (2 years)</li>
              </ul>';
      include '../partes/infobox.php'
      ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="plants"> <!-- div que segura o article -->
        <div class="row">
            <h1 class="text-center" >The Collection</h1>
            <div class="col-md-12 col-sm-12 col-xs-12"> <!-- col-md-12 thumbnail -->
                <div class="row"> <!-- row thumbnail -->
                  <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
                      <div class="thumbnail ">
                          <img src="img/1alata-graciliflora.jpg"  data-toggle="modal" data-target=".dio11" class="img-responsive" alt="Generic placeholder thumbnail">
                          <div class="modal fade dio11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                              <div class="modal-dialog ">
                                  <div class="modal-content">
                                      <img src="img/1alata-graciliflora.jpg" class="img-responsive">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="caption">
                              <h3 class="text-center"> N. Alata </h3>
                              <?php
                              $size1 = 'P';
                              $precop1 = '10,00';
                              $pe1 = 'OK';
                              $size2 = 'M';
                              $precop2 = '30,00';
                              $pe2 = 'OUT';
                              include'../partes/tableprice1.php';
                              include'../partes/tableprice2.php';
                              include'../partes/tableprice3.php';
                              echo '</table>';
                              ?>
                            </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
                      <div class="thumbnail ">
                          <img src="img/"  data-toggle="modal" data-target=".dio11" class="img-responsive" alt="Generic placeholder thumbnail">
                          <div class="modal fade dio11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                              <div class="modal-dialog ">
                                  <div class="modal-content">
                                      <img src="img/" class="img-responsive">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="caption">
                              <h3 class="text-center"> N. xWrigleyana </h3>
                              <?php
                              $size1 = 'P';
                              $precop1 = '25,00';
                              $pe1 = 'OUT';
                              $size2 = 'M';
                              $precop2 = '--';
                              $pe2 = '--';
                              include'../partes/tableprice1.php';
                              include'../partes/tableprice2.php';
                              include'../partes/tableprice3.php';
                              echo '</table>';
                              ?>
                            </div>
                      </div>
                  </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/2belli.jpg" data-toggle="modal" data-target=".dio12" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/2belli.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">N. Belli</h3>
                                <?php
                                $size1 = 'P';
                                $precop1 = '25,00';
                                $pe1 = 'OUT';
                                $size2 = 'M';
                                $precop2 = '--';
                                $pe2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/3ventricosa-mini.jpg"  data-toggle="modal" data-target=".dio13"  class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/3ventricosa-mini.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">N. Ventricosa-mini </h3>

                                <?php
                                $size1 = 'P';
                                $precop1 = '25,00';
                                $pe1 = 'OUT';
                                $size2 = 'M';
                                $precop2 = '--';
                                $pe2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/5mistaxkhasiana.jpg" data-toggle="modal" data-target=".dio15" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/5mistaxkhasiana.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">N. Mixta x Khasiana</h3>
                                <?php
                                $size1 = 'P';
                                $precop1 = '80,00';
                                $pe1 = 'OUT';
                                $size2 = 'M';
                                $precop2 = '--';
                                $pe2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/6ventricosaxkhasiana.jpg" data-toggle="modal" data-target=".dio16" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/6ventricosaxkhasiana.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center"> N. Ventricosa x Khasiana</h3>
                                <?php
                                $size1 = 'P';
                                $precop1 = '40,00';
                                $pe1 = 'OUT';
                                $size2 = 'M';
                                $precop2 = '--';
                                $pe2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/17mista.jpg" data-toggle="modal" data-target=".nepmis" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade nepmis" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/17mista.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center"> N. Mista</h3>
                                <?php
                                $size1 = 'P';
                                $precop1 = '40,00';
                                $size2 = 'M';
                                $precop2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/.jpg" data-toggle="modal" data-target=".nepana" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade nepana" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center"> N. Anamensis</h3>
                                <?php
                                $size1 = 'P';
                                $precop1 = '25,00';
                                $size2 = 'M';
                                $precop2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="thumbnail ">
                            <img src="img/4sanquineaxraflesiana.jpg" data-toggle="modal" data-target=".dio14" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/4sanquineaxraflesiana.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">N. Sanquinea x Raflesiana 'nivea'</h3>
                                <?php
                                $size1 = 'P';
                                $precop1 = '25,00';
                                $size2 = 'M';
                                $precop2 = '--';
                                include'../partes/tableprice1.php';
                                include'../partes/tableprice2.php';
                                include'../partes/tableprice3.php';
                                echo '</table>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- row thumbnail -->

            </div> <!-- col-md-12 thumbnail -->
        </div> <!-- div que segura o article -->
    </div> <!-- article -->
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <h1 class="text-center"> Seeds </h1>
            // colocar uma img grande mostranco como a semente é, dai so por uma tabela com nome, quantidade e preço;
        </div>
    </div>
    <?php
    $sun = '3/4';
    $water = 'Twice a day';
    $substrat = 'Musgo Sphagnum';
    $fertilizer = 'Noway';
    include '../partes/howtocultive.php';
    ?>
</div> <!--container-->
<?php $t='' ; include '../partes/footer.php'; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/meu.js"></script>
</body>

</html>
