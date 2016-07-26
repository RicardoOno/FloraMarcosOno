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
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and M queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
</head>

<body>
  <?php
  $img= 'imgsarra';
  $texto1='Sarracenia';
  $texto2 ='The most catcher of bug';
  include '../partes/nav.php';
  ?>
  <div class="container">
    <?php
    $sell = 'What means:<ul>
                <li><b>P</b>: Seedlings (1 year)</li>
                <li><b>M</b>: Medium (2 years)</li>
                <li><b>G</b>: Big (3 years)</li>
            </ul>';
    include '../partes/infobox.php'
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="plants"> <!-- div que segura o article -->
      <div class="row">
        <h1 class="text-center">The Collection</h1>
        <div class="col-md-12 col-sm-12 col-xs-12"> <!-- col-md-12 thumbnail -->
          <div class="row"> <!-- row thumbnail -->
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/11psitaxpurpurea.jpg" data-toggle="modal" data-target=".hib4" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade hib4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/11psitaxpurpurea.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Psittacina x Purpurea</h3>
                  <?php
                  $precop = '20,00';
                  $pe ='OK';
                  $precom = '30,00';
                  $me ='OK';
                  $precog = '40,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php'
                  ?>

                </div>

              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/5leucoalbina.jpg" data-toggle="modal" data-target=".dio14" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/5leucoalbina.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Leucophylla Albina</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '20,00';
                  $me ='OK';
                  $precog = '30,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/8leucoxalata.jpg" data-toggle="modal" data-target=".hib7" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade hib7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/8leucoxalata.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Leucophylla x Alata</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '20,00';
                  $me ='OK';
                  $precog = '30,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/7leucored.jpg"  data-toggle="modal" data-target=".dio193" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio193" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/7leucored.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Red Leucophylla</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '20,00';
                  $me ='OK';
                  $precog = '30,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/6leucophylla.jpg"  data-toggle="modal" data-target=".dio13"  class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/6leucophylla.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Leucophylla</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '20,00';
                  $me ='OK';
                  $precog = '30,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/14leucoxrubra-withoutID1.jpg" data-toggle="modal" data-target=".hib15" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade hib15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/14leucoxrubra-withoutID1.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Without ID 1</h3>
                  <?php
                  $precop = '25,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/15withoutID2.jpg" data-toggle="modal" data-target=".hib16" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade hib16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/15withoutID2.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Without ID 2 </h3>
                  <?php
                  $precop = '--';
                  $pe ='--';
                  $precom = '30,00';
                  $me ='OK';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/3flavarugeli.jpg" data-toggle="modal" data-target=".dio12" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/3flavarugeli.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Flava Rugelli </h3>
                  <?php
                  $precop = '20,00';
                  $pe ='OUT';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/1alata.jpg"  data-toggle="modal" data-target=".dio11" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/1alata.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Alata</h3>
                  <?php
                  $precop = '--';
                  $pe ='--';
                  $precom = '--';
                  $me ='--';
                  $precog = '50,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/2flavaredtube.jpg" data-toggle="modal" data-target=".dio199" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio199" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/2flavaredtube.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Flava Red Tube </h3>
                  <?php
                  $precop = '50,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/12rubragulfensis.jpg" data-toggle="modal" data-target=".sar12" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade sar12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/12rubragulfensis.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Rubra Gulfensis</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '30,00';
                  $me ='OUT';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/10psitacina.jpg" data-toggle="modal" data-target=".sarpsi" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade sarpsi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/10psitacina.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Psittacina</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '17,00';
                  $me ='OUT';
                  $precog = '50,00';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/13rubralabamensis.jpg" data-toggle="modal" data-target=".dio16" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/13rubralabamensis.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Rubra Alabamensis </h3>
                  <?php
                  $precop = '--';
                  $pe ='--';
                  $precom = '30,00';
                  $me ='OUT';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/4flavaxpurpu.jpg" data-toggle="modal" data-target=".hib10" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade hib10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/4flavaxpurpu.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Flava x Purpurea</h3>
                  <?php
                  $precop = '20,00';
                  $pe ='OUT';
                  $precom = '30,00';
                  $me ='OUT';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php' ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/9leucoxpurpurea.jpg" data-toggle="modal" data-target=".hib1" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade hib1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/9leucoxpurpurea.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">S. Leucophylla x Purpurea</h3>
                  <?php
                  $precop = '20,00';
                  $pe ='OK';
                  $precom = '30,00';
                  $me ='OK';
                  $precog = '40,00';
                  $ge = 'OUT';
                  include'../partes/tableprice.php' ?>
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
  <?php include'../partes/footer.php' ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/meu.js"></script>
</body>

</html>
