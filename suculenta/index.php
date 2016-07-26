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
        <div class="row">
            <h1 class="text-center" >The Collection</h1>
            <div class="col-md-12 col-sm-12 col-xs-12"> <!-- col-md-12 thumbnail -->
                <div class="row"> <!-- row thumbnail -->
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s01.jpg"  data-toggle="modal" data-target=".suc1" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s01.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 01</h3>
                            </div>

                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s02.jpg"  data-toggle="modal" data-target=".suc2" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s02.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 02</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s03.jpg"  data-toggle="modal" data-target=".suc3" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s03.jpg" class="img-responsive">
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
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s04.jpg"  data-toggle="modal" data-target=".suc4" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s04.jpg" class="img-responsive">
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
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s05.jpg"  data-toggle="modal" data-target=".suc5" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s05.jpg" class="img-responsive">
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

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s06.jpg"  data-toggle="modal" data-target=".suc6" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s06.jpg" class="img-responsive">
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
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s07.jpg"  data-toggle="modal" data-target=".suc7" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s07.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 07</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s08.jpg"  data-toggle="modal" data-target=".suc8" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s08.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 08</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s09.jpg"  data-toggle="modal" data-target=".suc9" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s09.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 09</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s10.jpg"  data-toggle="modal" data-target=".suc10" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s10.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 10</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s11.jpg"  data-toggle="modal" data-target=".suc11" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s11.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 11</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s12.jpg"  data-toggle="modal" data-target=".suc12" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s12.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 12</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s13.jpg"  data-toggle="modal" data-target=".suc13" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s13.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 13</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s14.jpg"  data-toggle="modal" data-target=".suc14" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s14.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 14</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s15.jpg"  data-toggle="modal" data-target=".suc15" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s15.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 15</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s16.jpg"  data-toggle="modal" data-target=".suc16" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s16.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 16</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s17.jpg"  data-toggle="modal" data-target=".suc17" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s17.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 17</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s18.jpg"  data-toggle="modal" data-target=".suc18" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc18" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s18.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 18</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s19.jpg"  data-toggle="modal" data-target=".suc19" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc19" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s19.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 19</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s21.jpg"  data-toggle="modal" data-target=".suc21" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s21.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 21</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s22.jpg"  data-toggle="modal" data-target=".suc22" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s22.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 22</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s23.jpg"  data-toggle="modal" data-target=".suc23" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc23" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s23.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 23</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s24.jpg"  data-toggle="modal" data-target=".suc24" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc24" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s24.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 24</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s25.jpg"  data-toggle="modal" data-target=".suc25" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc25" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s25.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 25</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s26.jpg"  data-toggle="modal" data-target=".suc26" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc26" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s26.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 26</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s27.jpg"  data-toggle="modal" data-target=".suc27" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc27" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s27.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 27</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s28.jpg"  data-toggle="modal" data-target=".suc28" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc28" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s28.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 28</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s29.jpg"  data-toggle="modal" data-target=".suc29" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc29" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s29.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 29</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s30.jpg"  data-toggle="modal" data-target=".suc30" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc30" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s30.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 30</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s31.jpg"  data-toggle="modal" data-target=".suc31" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc31" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s31.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 31</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s32.jpg"  data-toggle="modal" data-target=".suc32" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc32" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s32.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 32</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s33.jpg"  data-toggle="modal" data-target=".suc33" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc33" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s33.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 33</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s34.jpg"  data-toggle="modal" data-target=".suc34" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc34" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s34.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 34</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s35.jpg"  data-toggle="modal" data-target=".suc35" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc35" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s35.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 35</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s36.jpg"  data-toggle="modal" data-target=".suc36" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc36" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s36.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 36</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s37.jpg"  data-toggle="modal" data-target=".suc37" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc37" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s37.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 37</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s39.jpg"  data-toggle="modal" data-target=".suc39" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc39" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s39.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 39</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s40.jpg"  data-toggle="modal" data-target=".suc40" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc40" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s40.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 40</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s41.jpg"  data-toggle="modal" data-target=".suc41" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc41" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s41.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 41</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s42.jpg"  data-toggle="modal" data-target=".suc42" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc42" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s42.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 42</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s43.jpg"  data-toggle="modal" data-target=".suc43" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc43" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s43.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 43</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s44.jpg"  data-toggle="modal" data-target=".suc44" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc44" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s44.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 44</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s45.jpg"  data-toggle="modal" data-target=".suc45" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc45" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s45.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 45</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s46.jpg"  data-toggle="modal" data-target=".suc46" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc46" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s46.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 46</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s47.jpg"  data-toggle="modal" data-target=".suc47" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc47" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s47.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 47</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s48.jpg"  data-toggle="modal" data-target=".suc48" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc48" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s48.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 48</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s49.jpg"  data-toggle="modal" data-target=".suc49" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc49" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s49.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 49</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s50.jpg"  data-toggle="modal" data-target=".suc50" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc50" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s50.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 50</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s51.jpg"  data-toggle="modal" data-target=".suc51" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc51" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s51.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 51</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s52.jpg"  data-toggle="modal" data-target=".suc52" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc52" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s52.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 52</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s53.jpg"  data-toggle="modal" data-target=".suc53" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc53" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s53.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 53</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s54.jpg"  data-toggle="modal" data-target=".suc54" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc54" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s54.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 54</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s55.jpg"  data-toggle="modal" data-target=".suc55" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc55" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s55.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 55</h3>
                            </div>
                            <p class="text-center preco2">
                                R$:  5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s57.jpg"  data-toggle="modal" data-target=".suc57" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc57" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s57.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 57</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s59.jpg"  data-toggle="modal" data-target=".suc59" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc59" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s59.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 59</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s60.jpg"  data-toggle="modal" data-target=".suc60" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc60" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s60.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 60</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s61.jpg"  data-toggle="modal" data-target=".suc61" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc61" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s61.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 61</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s62.jpg"  data-toggle="modal" data-target=".suc62" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc62" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s62.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 62</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s63.jpg"  data-toggle="modal" data-target=".suc63" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc63" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s63.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 63</h3>
                            </div>
                            <p class="text-center preco2">
                                R$:  2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s64.jpg"  data-toggle="modal" data-target=".suc64" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc64" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s64.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 64</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s66.jpg"  data-toggle="modal" data-target=".suc66" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc66" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s66.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 66</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s67.jpg"  data-toggle="modal" data-target=".suc67" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc67" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s67.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 67</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s68.jpg"  data-toggle="modal" data-target=".suc68" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc68" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s68.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 68</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s69.jpg"  data-toggle="modal" data-target=".suc69" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc69" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s69.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 69</h3>
                            </div>
                            <p class="text-center preco2">
                                R$:  2,50.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s70.jpg"  data-toggle="modal" data-target=".suc70" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc70" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s70.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 70</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s71.jpg"  data-toggle="modal" data-target=".suc71" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc71" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s71.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 71</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s72.jpg"  data-toggle="modal" data-target=".suc72" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc72" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s72.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 72</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00. e 20,00</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s73.jpg"  data-toggle="modal" data-target=".suc73" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc67" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s73.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 73</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s74.jpg"  data-toggle="modal" data-target=".suc74" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc74" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s74.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 74</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s75.jpg"  data-toggle="modal" data-target=".suc75" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc75" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s75.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 75</h3>
                            </div>
                            <p class="text-center preco2">
                                R$:  7,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s76.jpg"  data-toggle="modal" data-target=".suc76" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc76" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s76.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 76</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s77.jpg"  data-toggle="modal" data-target=".suc77" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc77" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s77.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 77</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s78.jpg"  data-toggle="modal" data-target=".suc78" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc78" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s78.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 78</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s79.jpg"  data-toggle="modal" data-target=".suc79" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc79" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s79.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 79</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 10,00.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12">
                        <div class="thumbnail ">
                            <img src="img/s80.jpg"  data-toggle="modal" data-target=".suc80" class="img-responsive" alt="Generic placeholder thumbnail">
                            <div class="modal fade suc80" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <img src="img/s80.jpg" class="img-responsive">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text-center">S. 80</h3>
                            </div>
                            <p class="text-center preco2">
                                R$: 5,00.</p>
                        </div>
                    </div>
                </div> <!-- row thumbnail -->

            </div> <!-- col-md-12 thumbnail -->
        </div> <!-- div que segura o article -->
    </div> <!-- article -->
    <div class="col-md-6 col-sm-12 col-xs-12">
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
