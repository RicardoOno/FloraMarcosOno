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
$img= 'imggenli';
$texto1='Genlisea';
$texto2 ='A rare type of carnivorous';
include '../partes/nav.php';
?>

<div class="container">
    <?php
    $sell = 'Just <b>seedling</b> to sell of Pinguiculas.';
    include '../partes/infobox.php'
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="plants"> <!-- div que segura o article -->
        <div class="row">
            <h1 class="text-center" >The Plant</h1>
            <div class="col-md-12 col-sm-12 col-xs-12"> <!-- col-md-12 thumbnail -->
                <div class="row"> <!-- row thumbnail -->
                    <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
                        <div class="thumbnail ">
                            <img src="../img/genlisea.jpg"  data-toggle="modal" data-target=".dio13"  class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="../img/genlisea.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p class="text-center preco2">
                                    R$: 10,00.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="thumbnail">
                            <img src="../img/biblys.jpg"  data-toggle="modal" data-target=".dio14"  class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="../img/biblys.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="thumbnail">
                            <img src="img/genlisea-1.jpg"  data-toggle="modal" data-target=".dio15"  class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/genlisea-1.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="thumbnail">
                            <img src="img/genlisea-1.jpg"  data-toggle="modal" data-target=".dio16"  class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/genlisea-1.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="thumbnail">
                            <img src="img/genlisea-1.jpg"  data-toggle="modal" data-target=".dio17"  class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade dio17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/genlisea-1.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- row thumbnail -->
            </div> <!-- col-md-12 thumbnail -->
        </div> <!-- div que segura o article -->
    </div> <!-- article -->
    <div class="col-md-6 col-sm-6 col-xs-12" id="seeds">
        <div class="row">
            <h1 class="text-center"> Seeds </h1>
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="thumbnail ">
                    <div class="caption">
                        <p class="text-center"><b>I DON'T HAVE TO SELL </b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $sun = '3/4';
    $water = 'Twice a day or put a dish with water';
    $substrat = 'Musgo Sphagnum';
    $fertilizer = 'No way';
    $replant = 'In the Spring change the substrate and/or vase';
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
