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
  $img= 'imgsucu';
  $texto1='Suculenta';
  $texto2 ='There aren\'t just one way';
  include '../partes/nav.php';
  ?>
<div class="container">
  <?php
  $sell = 'Just <b>seedling</b> to sell of Suculentas.';
  include '../partes/infobox.php'
  ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="plants"> <!-- div que segura o article -->

        <?php
        include '../plantas/suculentas.php';
        ?>

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
    $water = 'Twice a day';
    $substrat = 'Musgo Sphagnum';
    $fertilizer = 'Noway';
    $replant = 'Noway';
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
