<?php require_once ('partes/scripts.php');?>
<?php
$home = './';
$dio = 'aa';
$dro = 'plantas/drosera/';
require 'partes/navbar.php';
?>
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item  active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image: url('img/1.jpg')"></div>
            <div class="carousel-caption" id="caption-home">
                <h1>Bem vindo ao Mundo das Plantas Carnivoras</h1>
            </div>
        </div>
        <div class="item ">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image: url('img/2.jpg')"></div>
            <div class="carousel-caption" id="caption-home">
                <h1>Welcome to the World of Carnivorous Plant</h1>
            </div>
        </div>
        <div class="item ">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image: url('img/3.jpg')"></div>
            <div class="carousel-caption" id="caption-home">
                <h1>Bienvenue dans le Monde des Plantes Carnivores</h1>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<div class="container-fluid">
</div>
<article class="col-md-12">
    <div class="row shadow">
        <h1>Plantas Carnivoras</h1>

        <!-- Varias tipos -->
        <?php
        $empty = array(
            1 => array(
                'titulo' => 'Dionaea',
                'qtd' => '<b>+10</b>',
                'img' => 'plantas/dionaea/img/1tipica_a.jpg',
                'nomeimg' => 'DM. tipica',
                'cultivo' => 'diocult',
                'agua' => 'AA',
                'substrato' => 'BB',
                'sol' => 'CC',
                'adubo' => 'DD',
            ),
            2 => array(
                'titulo' => 'Drosera',
                'qtd' => '<b>+10</b>',
                'img' => 'plantas/drosera/img/3burmannii.jpg',
                'nomeimg' => 'D. burmannii',
                'cultivo' => 'drocult',
                'agua' => 'BNN',
                'substrato' => 'WEQ',
                'sol' => 'QWEQE',
                'adubo' => 'QWEQE',
            ),
            3 => array(
                'titulo' => 'Sarracenia',
                'qtd' => '<b>+10</b>',
                'img' => 'plantas/sarracenia/img/3flavarugeli.jpg',
                'nomeimg' => 'S. flava rugeli',
                'cultivo' => 'sarcult',
                'agua' => 'BNNAAAa',
                'substrato' => 'WEQdasd3',
                'sol' => 'QWEQE243',
                'adubo' => 'QWEQEq31',
            ),
            4 => array(
                'titulo' => 'Nephente',
                'qtd' => '<b>+10</b>',
                'img' => 'plantas/nephentes/img/2belli.jpg',
                'nomeimg' => 'N. belli',
                'cultivo' => 'nepcult',
                'agua' => 'BNNAAA111111a',
                'substrato' => 'WEQdasd2111111111113',
                'sol' => 'QWEQE243333333333333333332',
                'adubo' => 'QWEQ13131213Eq31',
            ),
            5 => array(
                'titulo' => 'Utricularia',
                'qtd' => '<b>9</b>',
                'img' => 'plantas/utricularia/img/6usandersoni.jpg',
                'nomeimg' => 'U. sandersonii',
                'cultivo' => 'utrcult',
                'agua' => 'BNNAAA111111a',
                'substrato' => 'WEQdasd 211 1111111113',
                'sol' => 'QWEQE24333333 33333 33333332',
                'adubo' => 'QWEQ13131 21 3Eq31',
            ),
            6 => array(
                'titulo' => 'Pinguicula',
                'qtd' => '<b>7</b>',
                'img' => 'plantas/pinguicula/img/2wesser.jpg',
                'nomeimg' => 'P. wesser',
                'cultivo' => 'pincult',
                'agua' => 'BNNAAA111111a',
                'substrato' => 'WEQdasd 211 1111111113',
                'sol' => 'QWEQE24333333 33333 33333332',
                'adubo' => 'QWEQ13131 21 3Eq31',
            )
        );
        for ($e = 1; $e <= count($empty); $e++) {
            echo '
            <div class="col-sm-6 col-md-4 col-xs-12 width50">
                <div class="thumbnail">
                    <img src="' . $empty[$e]['img'] . '" alt="...">
                    <div class="caption">
                        <h2 class="text-center">' . $empty[$e]['titulo'] . '</h2>
                        <p class="text-center">Variedades: ' . $empty[$e]['qtd'] . '</p>
                        <p class="text-center"><span class="glyphicon glyphicon-camera"></span> ' . $empty[$e]['nomeimg'] . '</p>
                    </div>
                    <p class="text-center btn-meu ">
                        <a href="planta.php?cod=' . strtolower($empty[$e]['titulo']) . '" class="btn btn-success" role="button">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <b>Catalogo</b>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#' . $empty[$e]['cultivo'] . '" class="btn btn-success" role="button">
                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <b>Cultivo</b>
                        </a>
                    </p>
                </div>
            </div> 
         <div class="modal fade " id="' . $empty[$e]['cultivo'] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="' . $empty[$e]['cultivo'] . '"> Cultivo da ' . $empty[$e]['titulo'] . '</h3>
            </div>
            <div class="modal-body">
            <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Agua</h2>
                        <ul>
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                        </ul>
                    <p>'. $empty[$e]['agua'] .'</p>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Substrato</h2>
                    <p>'. $empty[$e]['substrato'] .'</p>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Iluminação</h2>
                    <p>'. $empty[$e]['sol'] .'</p>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Adubação</h2>
                    <p>'. $empty[$e]['adubo'] .'</p>
                </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <a href="planta.php?cod=' . strtolower($empty[$e]['titulo']) . '" class="btn btn-meu btn-success" role="button">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <b>Catalogo</b>
            </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
            </div>
        </div>
    </div>
</div>';
        }
        ?>

        <!-- Unico tipo -->
        <?php
        $empty1 = array(
            1 => array(
                'titulo' => 'Biblys',
                'img' => 'plantas/biblys/img/biblys.jpg',
                'nomeimg' => 'Biblys',
                'preco' => '50,00',
                'cultivo' => 'bibcult',
                'agua' => 'AA',
                'substrato' => 'BB',
                'sol' => 'CC',
                'adubo' => 'DD',
            ),
            2 => array(
                'titulo' => 'Cephalotus',
                'img' => 'plantas/cephalotus/img/cephalotus.jpg',
                'nomeimg' => 'Cephalotus',
                'preco' => '50,00',
                'cultivo' => 'cepcult',
                'agua' => 'BNN',
                'substrato' => 'WEQ',
                'sol' => 'QWEQE',
                'adubo' => 'QWEQE',
            ),
            3 => array(
                'titulo' => 'Drosophyllum',
                'img' => 'plantas/drosophyllum/img/drosophyllum.jpg',
                'nomeimg' => 'Drosophyllum',
                'preco' => '150,00',
                'cultivo' => 'droscult',
                'agua' => 'BNN',
                'substrato' => 'WEQ',
                'sol' => 'QWEQE',
                'adubo' => 'QWEQE',
            ),
            4 => array(
                'titulo' => 'Genlisea',
                'img' => 'plantas/genlise/img/genlisea.jpg',
                'nomeimg' => 'G enlisea',
                'preco' => '250,00',
                'cultivo' => 'genscult',
                'agua' => 'BNN',
                'substrato' => 'WEQ',
                'sol' => 'QWEQE',
                'adubo' => 'QWEQE',
            ),
            5 => array(
                'titulo' => 'Heliamphora',
                'img' => 'plantas/heliamphora/img/heliamphora.jpg',
                'nomeimg' => 'Heliamphora',
                'preco' => '200,00',
                'cultivo' => 'helcult',
                'agua' => 'BNN',
                'substrato' => 'WEQ',
                'sol' => 'QWEQE',
                'adubo' => 'QWEQE',
            ),
            6 => array(
                'titulo' => 'Stylidium',
                'img' => 'plantas/stylidium/img/stylidium.jpg',
                'nomeimg' => 'Stylidium',
                'preco' => '100,00',
                'cultivo' => 'stycult',
                'agua' => 'BNN',
                'substrato' => 'WEQ',
                'sol' => 'QWEQE',
                'adubo' => 'QWEQE',
            )
        );
        for ($e = 1; $e <= count($empty1); $e++) {
            echo '
            <div class="col-sm-6 col-md-4 col-xs-12 width50">
            <div class="thumbnail">
                <img src="'. $empty1[$e]['img'] .'" alt="...">
                <div class="caption">
                    <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> '. $empty1[$e]['nomeimg'] .'</h3>
                    <p class="text-center">R$ '. $empty1[$e]['preco'] .'</p>
                </div>
                <p class="text-center btn-meu">
                    <a href="#" data-toggle="modal" data-target="#' . $empty1[$e]['cultivo'] . '" class="btn btn-success " role="button">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <b>Cultivo</b>
                    </a>
                </p>
            </div>
        </div>
         <div class="modal fade " id="' . $empty1[$e]['cultivo'] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="' . $empty1[$e]['cultivo'] . '"> Cultivo da ' . $empty1[$e]['titulo'] . '</h3>
            </div>
            <div class="modal-body">
            <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Agua</h2>
                        <ul>
                            <li>A</li>
                            <li>B</li>
                            <li>Ca</li>
                        </ul>
                    <p>'. $empty1[$e]['agua'] .'</p>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Substrato</h2>
                    <p>'. $empty1[$e]['substrato'] .'</p>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Iluminação</h2>
                    <p>'. $empty1[$e]['sol'] .'</p>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                    <h2>Adubação</h2>
                    <p>'. $empty1[$e]['adubo'] .'</p>
                </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
            </div>
        </div>
    </div>
</div>';
        }
        ?>

    </div>
    <div class="row shadow">
        <h1 class="btn-meu">Suculentas</h1>
        <div class="col-md-4 col-xs-12">
            <div class="thumbnail">
                <img src="plantas/suculenta/img/s70.jpg" alt="...">
                <div class="caption">
                    <h4 class="text-center"><span class="glyphicon glyphicon-camera"></span> S.70</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="thumbnail">
                <img src="plantas/suculenta/img/s23.jpg" alt="...">
                <div class="caption">
                    <h4 class="text-center"><span class="glyphicon glyphicon-camera"></span> S.23</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="thumbnail">
                <img src="plantas/suculenta/img/s07.jpg" alt="...">
                <div class="caption">
                    <h4 class="text-center"><span class="glyphicon glyphicon-camera"></span> S.07</h4>
                </div>
            </div>
        </div>
        <div class="caption">
            <h3 class="text-center">I have more than 90 types</h3>
            <p class="text-center   ">The price will variable to plants</p>
        </div>
        <p id="btn-meu">
            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>
            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
        </p>
    </div>
    <div class="row shadow">
        <h1>Ornamental plants</h1>
        <div class="col-sm-6 col-md-4 col-xs-12">
            <div class="thumbnail">
                <img src="plantas/utricularia/img/6usandersoni.jpg" alt="...">
                <div class="caption">
                    <h2 class="text-center">Utricularia</h2>
                    <p class="text-center">I have more than 10 types of Dionaeas</p>
                    <p class="text-center   ">The price will variable to plants</p>
                </div>
                <p class="text-center btn-meu">
                    <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>

                    <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12">
            <div class="thumbnail">
                <img src="plantas/utricularia/img/6usandersoni.jpg" alt="...">
                <div class="caption">
                    <h2 class="text-center">Utricularia</h2>
                    <p class="text-center">I have more than 10 types of Dionaeas</p>
                    <p class="text-center   ">The price will variable to plants</p>
                </div>
                <p class="text-center btn-meu">
                    <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>

                    <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12">
            <div class="thumbnail">
                <img src="plantas/utricularia/img/6usandersoni.jpg" alt="...">
                <div class="caption">
                    <h2 class="text-center">Utricularia</h2>
                    <p class="text-center">I have more than 10 types of Dionaeas</p>
                    <p class="text-center   ">The price will variable to plants</p>
                </div>
                <p class="text-center btn-meu">
                    <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>

                    <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                </p>
            </div>
        </div>

</article>

<?php
require 'partes/footer.php';

?>

