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

<body data-spy="scroll" data-target=".navbar">
  <?php
  $img= 'imgdio';
  $texto1='Dionaea Muscipula or Venus Fly Trap';
  $texto2 ='The most knowed carnivorous plant in the world';
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
        <h1 class="text-center" >The Collection</h1>
        <div class="col-md-12 col-sm-12 col-xs-12"> <!-- col-md-12 thumbnail -->
          <div class="row"> <!-- row thumbnail -->
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/1tipica_a.jpg"  data-toggle="modal" data-target=".dio13"  class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/1tipica_a.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">DM tipica</h3>
                  <?php
                  $precop = '6,00';
                  $pe ='OK';
                  $precom = '12,00';
                  $me ='OK';
                  $precog = '25,00';
                  $ge = 'OK';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/10sawtooh_m.jpg" data-toggle="modal" data-target=".dio14" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/10sawtooh_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center">DM Sawtooth</h3>
                  <?php
                  $precop = '10,00';
                  $pe ='OK';
                  $precom = '15,00';
                  $me ='OK';
                  $precog = '25,00';
                  $ge = 'OK';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/5g3xg4_m.jpg" data-toggle="modal" data-target=".dio18" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio18" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/5g3xg4_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM G3XG14</h3>
                  <?php
                  $precop = '35,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/2reddragon_m.jpg" data-toggle="modal" data-target=".dio19" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio19" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/2reddragon_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM Red Dragon</h3>
                  <?php
                  $precop = '50,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/3redshark_m.jpg" data-toggle="modal" data-target=".dio191" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio191" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/3redshark_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM Red Shark</h3>
                  <?php
                  $precop = '50,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/7star_m.jpg"  data-toggle="modal" data-target=".dio192" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio192" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/7star_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM Star</h3>
                  <?php
                  $precop = '130,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/4b52_m.jpg" data-toggle="modal" data-target=".dio196" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio196" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/4b52_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM B52</h3>
                  <?php
                  $precop = '150,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/9xo3_m.jpg"  data-toggle="modal" data-target=".dio194" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio194" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/9xo3_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM X03</h3>
                  <?php
                  $precop = '130,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/6microdente_m.jpg"  data-toggle="modal" data-target=".dio193" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio193" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/6microdente_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM Microdente</h3>
                  <?php
                  $precop = '130,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/11uksawtooth2.jpg" data-toggle="modal" data-target=".dio17" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dio17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/11uksawtooth2.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM UK Sawtooth II</h3>
                  <?php
                  $precop = '35,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
              <div class="thumbnail ">
                <img src="img/8swg_m.jpg" data-toggle="modal" data-target=".dioswg" class="img-responsive" alt="Generic placeholder thumbnail">
                <div class="modal fade dioswg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <img src="img/8swg_m.jpg" class="img-responsive">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                      </button>
                    </div>
                  </div>
                </div>
                <div class="caption">
                  <h3 class="text-center"> DM South West Giant</h3>
                  <?php
                  $precop = '130,00';
                  $pe ='OK';
                  $precom = '--';
                  $me ='--';
                  $precog = '--';
                  $ge = '--';
                  include'../partes/tableprice.php'
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
