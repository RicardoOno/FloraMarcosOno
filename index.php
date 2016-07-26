<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flora Ono</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sandbox2.css" rel="stylesheet">
    <!--<link href="css/sandbox.css" rel="stylesheet">-->
    <!--        <link href="css/meu.css" rel="stylesheet" />-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar" >
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadlr" >

            <nav class="navbar navbar-inverse" id="Navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand active" id="logo" href="./">Flora Marcos Ono</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#catalog">Catalog <span class="sr-only">(current)</span></a></li>
                            <li><a href="#mostselled">Most Selled</a></li>
                            <li><a href="#onlyone">Only One type</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carnivorous<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#dio">Dionaeas</a></li>
                                    <li><a href="#nep">Nephentes</a></li>
                                    <li><a href="#sarr">Sarracenias</a></li>
                                    <li><a href="#utri">Utricularias</a></li>
                                    <li><a href="#dro">Droseras</a></li>
                                    <li><a href="#ping">Pinguiculas</a></li>
                                </ul>
                            </li>
                            <li><a href="#sucu">Suculentas</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#footer">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadlr">
            <div class="jumbotron ">
                <div class="container-fluid">
                    <h1 class="jumb-texto" id="jumb-hum">Welcome to Flora Marcos Ono!</h1>
                    <p class="jumb-texto">The Biggest website about Carnivorous Plant. </p>
                    <p class="jumb-texto"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" >
  <?php
  $sell = 'What means:<ul>
              <li><b>P</b>: Seedlings (1 year)</li>
              <li><b>M</b>: Medium (2 years)</li>
              <li><b>G</b>: Big (3 years)</li>
          </ul>';
  include '../partes/infobox.php'
  ?>
  <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="alert alert-warning text-center" role="alert">
          <strong>Attention please!</strong>


              <ul class="text-left">
                <li>What means:
                  <ul>
                    <li><b>P</b>: Seedlings</li>
                    <li><b>M</b>: Medium </li>
                    <li><b>G</b>: Big </li>
                      <ul>
                        <li><b>Obs</b>: Theses letter are different to each other plants</li>
                      </ul>
                    <li><b>--</b> : No have</li>
                    <li><b>Just price</b>: It's Seedlings</li>
                 </ul>
                 <li>  For business or more information send us an <a href="#footer">e-mail</a>.
             </ul>
        </div>
     </div>
  </div>
    <div class="row" id="catalog-size">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadlr" id="catalog">

            <h1 class="text-center" >Catalog</h1>
            <a href="dionaea/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/dionaea.jpg" class=" img-responsive  " alt="Dionaea Muscipula" />
                    <div class="go-left">
                        Dionaeas
                    </div>
                </div>
            </a>
            <a href="sarracenia/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/sarracenia.jpg" class=" img-responsive  " alt="Sarracenia" />
                    <div class="go-left">
                        Sarracenia
                    </div>
                </div>
            </a>
            <a href="drosera/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/drosera.jpg" class=" img-responsive  " alt="Drosera" />
                    <div class="go-left">
                        Drosera
                    </div>
                </div>
            </a>
            <a href="nephentes/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/nephentes.jpg" class=" img-responsive  " alt="Nephentes" />
                    <div class="go-left">
                        Nephentes
                    </div>
                </div>
            </a>
            <a href="utricularia/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/utricularia.jpg" class=" img-responsive  " alt="Utricularia" />
                    <div class="go-left">
                        Utricularias
                    </div>
                </div>
            </a>
            <a href="pinguicula/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/pinguicula.jpg" class=" img-responsive  " alt="Pinguicula" />
                    <div class="go-left">
                        Pinguiculas
                    </div>
                </div>
            </a>
            <a href="suculenta/index.php">
                <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                    <img src="img/suculenta.jpg" class=" img-responsive  " alt="Suculenta" />
                    <div class="go-left">
                        Suculentas
                    </div>
                </div>
            </a>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/biblys.jpg" class=" img-responsive  " alt="Biblys" />
                <div class="go-left">
                    Byblis
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/cephalotus.jpg" class=" img-responsive  " alt="cephalotus" />
                <div class="go-left">
                    Cephalotus
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/stylidium.jpg" class=" img-responsive  " alt="Stilidium" />
                <div class="go-left">
                    stylidium
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/heliamphora.jpg" class=" img-responsive  " alt="Heliamphora" />
                <div class="go-left">
                    Heliamphora
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/genlisea.jpg" class=" img-responsive  " alt="Genlisea" />
                <div class="go-left">
                    Genlisea
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/drosophyllum.jpg" class=" img-responsive  " alt="Web Tutorial Plus - Demo" />
                <div class="go-left">
                    Drosophyllum
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/brocchinia.jpg" class=" img-responsive  " alt="Brocchinia" />
                <div class="go-left">
                    Brocchinia
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/stilidium.jpg" class=" img-responsive  " alt="Stilidium" />
                <div class="go-left">
                    Orquideas
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/anturio.JPG" class=" img-responsive  " alt="anturio" />
                <div class="go-left">
                    Anturio
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/clivia.jpg" class=" img-responsive  " alt="Clivia" />
                <div class="go-left">
                    Clivia
                </div>
            </div>
            <div class="holder smooth col-md-2 padcatalogo col-sm-4 col-xs-6">
                <img src="img/materias.jpg" class=" img-responsive  " alt="Materias" />
                <div class="go-left">
                    Materiais
                </div>
            </div>
        </div>
        <!-- catalogo -->
    </div>
            <!-- div que segura o article -->
                <!-- comeca as plantas -->
            <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo" id="mostselled">
                      <h1 class="text-center" > Most selled</h1>
                    <div class="col-md-12 col-sm-12 col-xs-12 padl" id="dio">
                        <div class="row">
                            <ul class="nav nav-tabs navplanta-font">
                                <li role="presentation" class="active"><a href="#dionaea" aria-controls="dionaea" role="tab" data-toggle="tab">Dionaea</a></li>
                                <li role="presentation"><a href="dionaea/index.php">Catalog <span class="badge">11</span></a></li>
                                <li role="presentation"><a href="#diocult" aria-controls="diocult" role="tab" data-toggle="tab">Cultive</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- 01 dionaea -->
                    <div class="col-md-12 col-sm-12 col-xs-12" >
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active " id="dionaea">
                                <!-- col-md-12 thumbnail -->
                                <div class="row">
                                    <!-- row thumbnail -->
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="thumbnail ">
                                            <img src="dionaea/img/1tipica_a.jpg" data-toggle="modal" data-target=".dio3" class="img-responsive" alt="Generic placeholder thumbnail">
                                            <div class="modal fade dio3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content">
                                                        <img src="dionaea/img/1tipica_a.jpg" class="img-responsive">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="text-center">DM tipica</h3>
                                            </div>
                                            <?php
                                              $precop = '10,00';
                                              $pe ='OK';
                                              $precom = '15,00';
                                              $me ='OK';
                                              $precog = '25,00';
                                              $ge = 'OK';
                                              include'partes/tableprice.php'
                                              ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="thumbnail ">
                                            <img src="dionaea/img/3redshark_m.jpg" data-toggle="modal" data-target=".dio5" class="img-responsive" alt="Generic placeholder thumbnail">
                                            <div class="modal fade dio5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content">
                                                        <img src="dionaea/img/3redshark_m.jpg" class="img-responsive">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="text-center">DM Red Shark</h3>
                                            </div>

                                            <?php
                                              $precop = '50,00';
                                              $pe ='OK';
                                              $precom = '--';
                                              $me ='--';
                                              $precog = '--';
                                              $ge = '--';
                                              include'partes/tableprice.php'
                                              ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="thumbnail ">
                                            <img src="dionaea/img/10sawtooh_m.jpg" data-toggle="modal" data-target=".dio4" class="img-responsive" alt="Generic placeholder thumbnail">
                                            <div class="modal fade dio4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content">
                                                        <img src="dionaea/img/10sawtooh_m.jpg" class="img-responsive">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="text-center">DM Sawtooth</h3>
                                            </div>
                                            <?php
                                              $precop = '10,00';
                                              $pe ='OK';
                                              $precom = '15,00';
                                              $me ='OK';
                                              $precog = '25,00';
                                              $ge = 'OK';
                                              include'partes/tableprice.php'
                                              ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="thumbnail ">
                                            <img src="dionaea/img/5g3xg4_m.jpg" data-toggle="modal" data-target=".dio6" class="img-responsive" alt="Generic placeholder thumbnail">
                                            <div class="modal fade dio6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content">
                                                        <img src="dionaea/img/5g3xg4_m.jpg" class="img-responsive">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="text-center"> DM G3XG14</h3>
                                            </div>
                                            <?php
                                              $precop = '35,00';
                                              $pe ='OK';
                                              $precom = '--';
                                              $me ='--';
                                              $precog = '--';
                                              $ge = '--';
                                              include'partes/tableprice.php'
                                              ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- row thumbnail -->
                            </div>
                            <!-- col-md-12 thumbnail -->
                            <div role="tabpanel" class="tab-pane fade in" id="diocult">
                                <h3>How to Cultive</h3>
                                <p>First: You need to put her in some place that have sunlight entire day or 3/4 of the day. She needs a lot of water. And, never adube</p>
                            </div>
                        </div>


                    </div>
                </div><!-- dionaea -->
                </div>
            <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo">
            <div class="col-md-12 col-sm-12 col-xs-12 pad5lr">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="nep">
                        <div class="row">
                            <ul class="nav nav-tabs navplanta-font">
                                <li role="presentation" class="active"><a href="#nephentes" aria-controls="nephentes" role="tab" data-toggle="tab">Nephentes</a></li>
                                <li role="presentation"><a href="nephentes/index.php">Catalog <span class="badge">6</span></a></li>
                                <li role="presentation"><a href="#nepcult" aria-controls="nepcult" role="tab" data-toggle="tab">Cultive</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nephentes -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active " id="nephentes">
                        <!-- col-md-12 thumbnail -->
                        <div class="row">
                            <!-- row thumbnail -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="nephentes/img/1alata-graciliflora.jpg" data-toggle="modal" data-target=".nep1" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade nep1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="nephentes/img/1alata-graciliflora.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> N. Alata</h3>
                                    </div>
                                      <?php
                                      $size1 = 'P';
                                      $precop1 = '17,00';
                                      $pe1 = 'OK';
                                      $size2 = 'M';
                                      $precop2 = '?,00';
                                      $pe2 = 'OK';
                                      include'partes/tableprice1.php';
                                      include'partes/tableprice2.php';
                                      include'partes/tableprice3.php';
                                      echo '</table>';
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="nephentes/img/2belli.jpg" data-toggle="modal" data-target=".nep2" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade nep2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="nephentes/img/2belli.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">N. Belli </h3>
                                    </div>
                                      <?php
                                      $size1 = 'P';
                                      $precop1 = '25,00';
                                      $pe1 = 'OUT';
                                      $size2 = 'M';
                                      $precop2 = '?,00';
                                      $pe2 = 'OK';
                                      include'partes/tableprice1.php';
                                      include'partes/tableprice2.php';
                                      include'partes/tableprice3.php';
                                      echo '</table>';
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="thumbnail ">
                                    <img src="nephentes/img/5mistaxkhasiana.jpg" data-toggle="modal" data-target=".nep3" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade nep3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="nephentes/img/5mistaxkhasiana.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">N. Mista x Khasiana</h3>
                                    </div>
                                        <?php
                                        $size1 = 'P';
                                        $precop1 = '80,00';
                                        $pe1 = 'OK';
                                        $size2 = 'M';
                                        $precop2 = '?,00';
                                        $pe2 = 'OK';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        include'partes/tableprice3.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                        </div>
                        <!-- row thumbnail -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="nepcult">
                        <h3>How to cultive</h3>
                        <p>lorem ipsum asf fds  AE TWEFGHSAD df drfs dsf aw</p>
                    </div>
                </div>
            </div>
            <!-- col-md-12 thumbnail -->
        </div><!-- nephentes -->
    </div>
            <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo">
            <div class="col-md-12 col-sm-12 col-xs-12 padl">
                <div class="row">
                    <ul class="nav nav-tabs navplanta-font">
                        <li role="presentation" class="active"><a href="#drosera" aria-controls="drosera" role="tab" data-toggle="tab">Drosera</a></li>
                        <li role="presentation"><a href="drosera/index.php">Catalog <span class="badge">12</span></a></li>
                        <li role="presentation"><a href="#drocult" aria-controls="drocult" role="tab" data-toggle="tab">Cultive</a></li>
                    </ul>
                </div>
            </div>
            <!-- 01 drosera -->
            <div class="col-md-12 col-sm-12 col-xs-12">


                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active " id="drosera">
                        <!-- col-md-12 thumbnail -->
                        <div class="row">
                            <!-- row thumbnail -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="drosera/img/1afinis.JPG" data-toggle="modal" data-target=".dro1" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade dro1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="drosera/img/1afinis.JPG" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> D. Afinis</h3>
                                    </div>
                                        <?php
                                        $size1 = 'M';
                                        $precop1 = '7,00';
                                        $pe1 = 'OUT';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="drosera/img/3burmannii.jpg" data-toggle="modal" data-target=".dro2" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade dro2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="drosera/img/3burmannii.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">D. Burmannii</h3>
                                    </div>

                                        <?php
                                        $size1 = 'M';
                                        $precop1 = '7,00';
                                        $pe1 = 'OK';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="drosera/img/6capensis.JPG" data-toggle="modal" data-target=".dro3" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade dro3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="drosera/img/6capensis.JPG" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">D. Capensis</h3>
                                    </div>
                                        <?php
                                        $size1 = 'M';
                                        $precop1 = '6,00';
                                        $pe1 = 'OK';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="drosera/img/7capilaris.JPG" data-toggle="modal" data-target=".dro4" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade dro4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="drosera/img/7capilaris.JPG" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">D. capillaris</h3>
                                    </div>
                                        <?php
                                        $size1 = 'M';
                                        $precop1 = '6,00';
                                        $pe1 = 'OK';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="drosera/img/11spatulata.jpg" data-toggle="modal" data-target=".dro6" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade dro6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="drosera/img/11spatulata.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> D. spatulata</h3>
                                    </div>
                                        <?php
                                        $size1 = 'M';
                                        $precop1 = '6,00';
                                        $pe1 = 'OK';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="drosera/img/10madagascariense.JPG" data-toggle="modal" data-target=".dro5" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade dro5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="drosera/img/10madagascariense.JPG" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">D. madagascariense</h3>
                                    </div>
                                        <?php
                                        $size1 = 'M';
                                        $precop1 = '6,00';
                                        $pe1 = 'OK';
                                        include'partes/tableprice1.php';
                                        include'partes/tableprice2.php';
                                        echo '</table>';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in  " id="drocult">
                        <h3>How to cultive</h3>
                    </div>
                </div>
                <!-- row thumbnail -->
            </div>
            <!-- col-md-12 thumbnail -->
        </div><!-- drosera -->
    </div>
            <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo">
            <div class="col-md-12 col-sm-12 col-xs-12 padl">
                <div class="row">
                    <ul class="nav nav-tabs navplanta-font" >
                        <li role="presentation" class="active"><a  href="#sarracenia" aria-controls="sarracenia" role="tab" data-toggle="tab">Sarracenia </a></li>
                        <li role="presentation"><a href="sarracenia/index.php">Catalog <span class="badge">15</span></a></li>
                        <li role="presentation"><a href="#sarcult" aria-controls="sarcult" role="tab" data-toggle="tab">Cultive</a></li>
                    </ul>
                </div>
            </div>
            <!-- 01 dionaea -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- col-md-12 thumbnail -->
                <div class="tab-content"> <!-- engloba tudo -->

                    <div role="tabpanel" class="tab-pane fade in active " id="sarracenia"> <!--para cada item-->
                        <div class="row">
                            <!-- row thumbnail -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="sarracenia/img/1alata.jpg" data-toggle="modal" data-target=".sar1" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade sar1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="sarracenia/img/1alata.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> S. alata </h3>
                                    </div>
                                    <?php
                                      $precop = '50,00';
                                      $pe ='OUT';
                                      $precom = '--';
                                      $me ='--';
                                      $precog = '--';
                                      $ge = '--';
                                      include'partes/tableprice.php'
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="sarracenia/img/3flavarugeli.jpg" data-toggle="modal" data-target=".sar3" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade sar3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="sarracenia/img/3flavarugeli.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. Flava Rugelli</h3>
                                    </div>
                                    <?php
                                      $precop = '20,00';
                                      $pe ='OUT';
                                      $precom = '--';
                                      $me ='--';
                                      $precog = '--';
                                      $ge = '--';
                                      include'partes/tableprice.php'
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="sarracenia/img/6leucophylla.jpg" data-toggle="modal" data-target=".sar6" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade sar6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="sarracenia/img/6leucophylla.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> S. Leucophylla</h3>
                                    </div>
                                    <?php
                                      $precop = '10,00';
                                      $pe ='OK';
                                      $precom = '20,00';
                                      $me ='OK';
                                      $precog = '30,00';
                                      $ge = 'OUT';
                                      include'partes/tableprice.php'
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="sarracenia/img/4flavaxpurpu.jpg" data-toggle="modal" data-target=".sar4" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade sar4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="sarracenia/img/4flavaxpurpu.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. Flava x Purpurea </h3>
                                    </div>
                                    <?php
                                      $precop = '20,00';
                                      $pe ='OUT';
                                      $precom = '--';
                                      $me ='--';
                                      $precog = '--';
                                      $ge = '--';
                                      include'partes/tableprice.php'
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="sarracenia/img/5leucoalbina.jpg" data-toggle="modal" data-target=".sar5" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade sar5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="sarracenia/img/5leucoalbina.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. Leucophylla Albina</h3>
                                    </div>
                                    <?php
                                      $precop = '10,00';
                                      $pe ='OK';
                                      $precom = '20,00';
                                      $me ='OK';
                                      $precog = '30,00';
                                      $ge = 'OUT';
                                      include'partes/tableprice.php'
                                      ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="sarracenia/img/2flavaredtube.jpg" data-toggle="modal" data-target=".sar2" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade sar2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="sarracenia/img/2flavaredtube.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. Flava Red Tube</h3>
                                    </div>
                                    <?php
                                      $precop = '80,00';
                                      $pe ='OK';
                                      $precom = '--';
                                      $me ='--';
                                      $precog = '--';
                                      $ge = '--';
                                      include'partes/tableprice.php'
                                      ?>
                                </div>
                            </div>
                        </div>
                        <!-- row thumbnail -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="sarcult">
                        <h3>How to cultive</h3>
                        <p> aoush oaoi oisoi ddtg oiasd uihre oicvoçi hauisbdtui</p>
                        <p> aoush oaoi oisoi ddtg oiasd uihre oicvoçi hauisbdtui</p>
                    </div>
                </div>
            </div>
            <!-- col-md-12 thumbnail -->
        </div><!-- sarracenia -->
    </div>
            <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo">
            <div class="col-md-12 col-sm-12 col-xs-12 padl">
                <div class="row">
                    <ul class="nav nav-tabs navplanta-font">
                        <li role="presentation" class="active"><a href="#pinguicula" aria-controls="pinguicula" role="tab" data-toggle="tab">Pinguiculas </a></li>
                        <li role="presentation"><a href="pinguicula/index.php">Catalog <span class="badge">6</span></a></li>
                        <li role="presentation"><a href="#pincult" aria-controls="pincult" role="tab" data-toggle="tab">Cultive</a></li>
                    </ul>
                </div>
            </div>
            <!-- 01 dionaea -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content"> <!-- engloba tudo -->

                    <div role="tabpanel" class="tab-pane fade in active " id="pinguicula"> <!-- cada item -->
                        <!-- col-md-12 thumbnail -->
                        <div class="row">
                            <!-- row thumbnail -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="pinguicula/img/4sethos.jpg" data-toggle="modal" data-target=".pin1" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade pin1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="pinguicula/img/4sethos.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> P. Sethos</h3>
                                    </div>
                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '20,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="pinguicula/img/1.1gigantea.jpg" data-toggle="modal" data-target=".pin3" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade pin3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="pinguicula/img/1.1gigantea.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">P. Gigantea</h3>
                                    </div>
                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '20,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="thumbnail ">
                                    <img src="pinguicula/img/6aphrodite.jpg" data-toggle="modal" data-target=".pin2" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade pin2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="pinguicula/img/6aphrodite.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">P. Aphrodite</h3>
                                    </div>
                                            <?php
                                            $size1 = 'M';
                                            $precop1 = '20,00';
                                            $pe1 = 'OK';
                                            include'partes/tableprice1.php';
                                            include'partes/tableprice2.php';
                                            echo '</table>';
                                            ?>
                                </div>
                            </div>
                        </div>
                        <!-- row thumbnail -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="pincult">
                        <h3>How to cultive</h3>
                        <p>S DFPR KPOMCP AMPO</p>
                        <p>S AÇLMPMF POAMPDMO FSA</p>
                        <p>asd sçlM FP´TW</p>
                    </div>
                </div>
            </div>
            <!-- col-md-12 thumbnail -->
        </div><!-- pinguicula -->
    </div>
            <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo">
            <div class="col-md-12 col-sm-12 col-xs-12 padl">
                <div class="row">
                    <ul class="nav nav-tabs navplanta-font">
                        <li role="presentation" class="active"><a  href="#utricularia" aria-controls="utricularia" role="tab" data-toggle="tab">Utricularia </a></li>
                        <li role="presentation"><a href="utricularia/index.php">Catalog <span class="badge">10</span></a></li>
                        <li role="presentation"><a href="#ultricult" aria-controls="ultricult" role="tab" data-toggle="tab">Cultive</a></li>
                    </ul>
                </div>
            </div>
            <!-- 01 dionaea -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content"> <!-- engloba tudo -->

                    <div role="tabpanel" class="tab-pane fade in active " id="utricularia"> <!-- cada item -->
                        <!-- col-md-12 thumbnail -->
                        <div class="row">
                            <!-- row thumbnail -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="utricularia/img/1arenaria.jpg" data-toggle="modal" data-target=".ult1" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade ult1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="utricularia/img/1arenaria.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> U. Arenaria</h3>
                                    </div>
                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '5,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="utricularia/img/3ugiba.jpg" data-toggle="modal" data-target=".ult3" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade ult3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="utricularia/img/3ugiba.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">U. Giba</h3>
                                    </div>

                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '10,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="utricularia/img/5ulongifolia.jpg" data-toggle="modal" data-target=".ult2" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade ult2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="utricularia/img/5ulongifolia.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">U. Longifolia</h3>
                                    </div>

                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '10,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="utricularia/img/2ucalicifida.jpg" data-toggle="modal" data-target=".ult4" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade ult4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="utricularia/img/2ucalicifida.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> U. Calicyfida</h3>
                                    </div>
                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '20,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="utricularia/img/6usandersoni.jpg" data-toggle="modal" data-target=".ult6" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade ult6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="utricularia/img/6usandersoni.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> U. Sandersoni </h3>
                                    </div>

                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '20,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="utricularia/img/7usubulata.jpg" data-toggle="modal" data-target=".ult5" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade ult5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="utricularia/img/7usubulata.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">U. Subulata</h3>
                                    </div>
                                          <?php
                                          $size1 = 'M';
                                          $precop1 = '5,00';
                                          $pe1 = 'OK';
                                          include'partes/tableprice1.php';
                                          include'partes/tableprice2.php';
                                          echo '</table>';
                                          ?>
                                </div>
                            </div>
                        </div>
                        <!-- row thumbnail -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="ultricult">
                        <h3>How to cultive</h3>
                    </div>
                </div>
            </div>
            <!-- col-md-12 thumbnail -->
        </div><!-- utricularia -->
    </div>
            <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo">
            <div class="col-md-12 col-sm-12 col-xs-12 padl">
                <div class="row">
                    <ul class="nav nav-tabs navplanta-font">
                        <li role="presentation" class="active"><a  href="#suculenta" aria-controls="suculenta" role="tab" data-toggle="tab">Suculenta </a></li>
                        <li role="presentation"><a href="suculenta/index.php">Catalog <span class="badge">75</span></a></li>
                        <li role="presentation"><a href="#succult" aria-controls="succult" role="tab" data-toggle="tab">Cultive</a></li>
                    </ul>
                </div>
            </div>
            <!-- 01 dionaea -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- col-md-12 thumbnail -->
                <div class="tab-content"> <!-- engloba tudo -->

                    <div role="tabpanel" class="tab-pane fade in active " id="suculenta"> <!-- cada item -->
                        <div class="row">
                            <!-- row thumbnail -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="suculenta/img/s01.jpg" data-toggle="modal" data-target=".suc1" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade suc1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="suculenta/img/s01.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> S. 01</h3>
                                    </div>
                                    <p class="text-center preco2">
                                        R$: 2,50.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="suculenta/img/s03.jpg" data-toggle="modal" data-target=".suc3" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade suc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="suculenta/img/s03.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. 03</h3>
                                    </div>
                                    <p class="text-center preco2">
                                        R$: 2,50.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="suculenta/img/s04.jpg" data-toggle="modal" data-target=".suc2" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade suc2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="suculenta/img/s04.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. 04</h3>
                                    </div>
                                    <p class="text-center preco2">
                                        R$: 2,50.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="suculenta/img/s05.jpg" data-toggle="modal" data-target=".suc5" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade suc5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="suculenta/img/s05.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. 05</h3>
                                    </div>
                                    <p class="text-center preco2">
                                        R$: 5,00.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="suculenta/img/s06.jpg" data-toggle="modal" data-target=".suc4" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade suc4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="suculenta/img/s06.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center">S. 06</h3>
                                    </div>
                                    <p class="text-center preco2">
                                        R$: 2,50.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="thumbnail ">
                                    <img src="suculenta/img/s07.jpg" data-toggle="modal" data-target=".suc6" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <div class="modal fade suc6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <img src="suculenta/img/s07.jpg" class="img-responsive">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="text-center"> S. 07</h3>
                                    </div>
                                    <p class="text-center preco2">
                                        R$: 5,00.</p>
                                </div>
                            </div>
                        </div>
                        <!-- row thumbnail -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="succult">
                        <h3>How to cultive</h3>
                    </div>

                </div>

            </div>
            <!-- col-md-12 thumbnail -->
        </div><!-- suculentas -->
    </div id="onlyone">
                <h1 class="text-center">Only one </h1>

                <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 padcatalogo" >
                        <!-- 01 dionaea -->
                        <div class="col-md-12 col-sm-12 col-xs-12" >
                                    <!-- col-md-12 thumbnail -->
                                    <div class="row">
                                        <!-- row thumbnail -->
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="thumbnail ">
                                                <img src="img/biblys.jpg" data-toggle="modal" data-target=".biblys" class="img-responsive" alt="Generic placeholder thumbnail">
                                                <div class="modal fade biblys" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <img src="img/biblys.jpg" class="img-responsive">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="text-center">Biblys</h3>
                                                <p class="text-center preco2">
                                                    R$: 10,00.</p>
                                                    <h4>Cultive:</h4>
                                                    <ul>
                                                      <li><b>Sun</b>: 3/4 of the day</li>
                                                      <li><b>Water</b>: Twice a day or put in a dish with water</li>
                                                      <li><b>Substrat</b>: Just Musgo Sphagnum</li>
                                                      <li><b>Adubo</b>: noway</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="thumbnail ">
                                                <img src="img/stylidium.jpg" data-toggle="modal" data-target=".stylidium" class="img-responsive" alt="Stylidium">
                                                <div class="modal fade stylidium" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <img src="img/stylidium.jpg" class="img-responsive">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="text-center">Stylidium</h3>
                                                <p class="text-center preco2">
                                                    R$: 5,00.</p>
                                                    <h4>Cultive:</h4>
                                                    <ul>
                                                      <li><b>Sun</b>: 3/4 of the day</li>
                                                      <li><b>Water</b>: Twice a day or put in a dish with water</li>
                                                      <li><b>Substrat</b>: Just Musgo Sphagnum</li>
                                                      <li><b>Adubo</b>: noway</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="thumbnail ">
                                                <img src="img/genlise.jpg" data-toggle="modal" data-target=".Genlise" class="img-responsive" alt="genlise">
                                                <div class="modal fade Genlise" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <img src="img/genlise.jpg" class="img-responsive">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="text-center">Genlise</h3>
                                                <p class="text-center preco2">
                                                    R$: 20,00.</p>
                                                    <h4>Cultive:</h4>
                                                    <ul>
                                                      <li><b>Sun</b>: 3/4 of the day</li>
                                                      <li><b>Water</b>: Twice a day or put in a dish with water</li>
                                                      <li><b>Substrat</b>: Just Musgo Sphagnum</li>
                                                      <li><b>Adubo</b>: noway</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="thumbnail ">
                                                <img src="img/cephalotus.jpg" data-toggle="modal" data-target=".cephalotus" class="img-responsive" alt="cephalotus">
                                                <div class="modal fade cephalotus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <img src="img/cephalotus.jpg" class="img-responsive">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="text-center">Cephalotus</h3>
                                                <p class="text-center preco2">
                                                    R$: 100,00.</p>
                                                    <h4>Cultive:</h4>
                                                    <ul>
                                                      <li><b>Sun</b>: 3/4 of the day</li>
                                                      <li><b>Water</b>: Twice a day or put in a dish with water</li>
                                                      <li><b>Substrat</b>: Just Musgo Sphagnum</li>
                                                      <li><b>Adubo</b>: noway</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="thumbnail ">
                                                <img src="img/drosophyllum.jpg" data-toggle="modal" data-target=".drosophyllum" class="img-responsive" alt="drosophyllum">
                                                <div class="modal fade drosophyllum" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <img src="img/drosophyllum.jpg" class="img-responsive">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="text-center">Drosophyllum</h3>
                                                <p class="text-center preco2">
                                                    R$: 10,00.</p>
                                                    <h4>Cultive:</h4>
                                                    <ul>
                                                      <li><b>Sun</b>: 3/4 of the day</li>
                                                      <li><b>Water</b>: Twice a day or put in a dish with water</li>
                                                      <li><b>Substrat</b>: Just Musgo Sphagnum</li>
                                                      <li><b>Adubo</b>: noway</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="thumbnail ">
                                                <img src="img/heliamphora .jpg" data-toggle="modal" data-target=".heliamphora" class="img-responsive" alt="heliamphora">
                                                <div class="modal fade heliamphora" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <img src="img/heliamphora.jpg" class="img-responsive">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="text-center">Heliamphora </h3>
                                                <p class="text-center preco2">
                                                    R$: 200,00.</p>
                                                    <h4>Cultive:</h4>
                                                    <ul>
                                                      <li><b>Sun</b>: 3/4 of the day</li>
                                                      <li><b>Water</b>: Twice a day or put in a dish with water</li>
                                                      <li><b>Substrat</b>: Just Musgo Sphagnum</li>
                                                      <li><b>Adubo</b>: noway</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- row thumbnail -->
                                <!-- col-md-12 thumbnail -->
                        </div>
                    </div><!-- dionaea -->
                    </div>
            <!-- termina as plantas -->

        <!-- row que segura o article -->
    </div>
    <!-- div que segura o article -->
</div>
<!--container-->
<?php $t='' ; include 'partes/footer.php'; ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/jquery.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
