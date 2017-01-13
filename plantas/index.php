<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'partes/scripts.php'; ?>
    <script src="js/teste.js"></script>
</head>
<body>

    <div class="container-fluid" >
        <header class="row" >
            <?php
            $home = './';
            $dio = 'plantas/dionaea/';
            $dro = 'plantas/drosera/';
            require 'partes/navbar.php';
            ?>
            <div class="jumbotron" id="jumb">
                <div class="container-fluid">
                    <h1 class="text-center"> Bem vindo a Flora Marcos Ono </h1>
                    <p class="text-center"> Veja minha coleção de plantas carnivoras, suculentas, orquideas e algumas plantas ornamentais. <br><span id="header-text">Enjoy &heartsuit;</span></p>
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-12 center">
                        <div class="row">
                            <div class="col-xs-4 col-md-4 ">
                                <div class="img2 svg">
                                    <a href="#sem"><img src="../../img/plant-on-a-hand.svg" class="svg1"> <br>Sementes </a>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 ">
                                <div class="img2 svg">
                                    <a href="#sem"><img src="../../img/plant-on-a-hand.svg" class="svg1"> <br>Sementes </a>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 ">
                                <div class="img2 svg">
                                    <a href="#sem"><img src="../../img/plant-on-a-hand.svg" class="svg1"> <br>Sementes </a>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 ">
                                <div class="img2 svg">
                                    <a href="#sem"><img src="../../img/plant-on-a-hand.svg" class="svg1"> <br>Sementes </a>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 ">
                                <div class="img2 svg">
                                    <a href="#sem"><img src="../../img/plant-on-a-hand.svg" class="svg1"> <br>Sementes </a>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 ">
                                <div class="img2 svg">
                                    <a href="#sem"><img src="../../img/plant-on-a-hand.svg" class="svg1"> <br>Sementes </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="container col-md-offset-1 col-md-10" >
        <article class="col-md-12 col-xs-12">
            <div class="row shadow">
                <h1>Plantas Carnivoras</h1>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/dionaea/img/1tipica_a.jpg" alt="...">
                        <div class="caption">
                            <h2 class="text-center">Dionaea</h2>
                            <p class="text-center">Possuo <b>+10</b> tipos diferentes</p>
                            <p class="text-center"><span class="glyphicon glyphicon-camera"></span> DM. comum</p>
                            </div>
                        <p class="text-center btn-meu ">
                            <a href="plantas/dionaea/" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <b>Catalogo</b></a>
                            <a href="plantas/dionaea/index.php#cult" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <b>Cultivo</b></a>
                        </p>
                    </div>
                </div> <!-- Dionaea -->
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/drosera/img/3burmannii.jpg" alt="...">
                        <div class="caption">
                            <h2 class="text-center">Drosera</h2>
                            <p class="text-center">Possuo <b>+10</b> tipos diferentes</p>
                            <p class="text-center"><span class="glyphicon glyphicon-camera"></span> D. burmannii</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div> <!-- Drosera -->
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/sarracenia/img/3flavarugeli.jpg" alt="...">
                        <div class="caption">
                            <h2 class="text-center">Sarracenia</h2>
                            <p class="text-center">Possuo <b>+15</b> tipos diferentes</p>
                            <p class="text-center"><span class="glyphicon glyphicon-camera"></span> S. flava</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>                        </p>
                    </div>
                </div> <!-- Sarracenia -->
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/nephentes/img/2belli.jpg" alt="...">
                        <div class="caption">
                            <h2 class="text-center">Nephente</h2>
                            <p class="text-center">Possuo <b>6</b> tipos diferentes</p>
                            <p class="text-center"><span class="glyphicon glyphicon-camera"></span> N. belli</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>                        </p>
                    </div>
                </div> <!-- Nephentes -->
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/utricularia/img/6usandersoni.jpg" alt="...">
                        <div class="caption">
                            <h2 class="text-center">Utricularia</h2>
                            <p class="text-center">Possuo <b>9</b> tipos diferentes</p>
                            <p class="text-center"><span class="glyphicon glyphicon-camera"></span> U. sandersoni</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>                        </p>
                    </div>
                </div> <!-- Utricularia -->
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/pinguicula/img/2wesser.jpg" alt="...">
                        <div class="caption">
                            <h2 class="text-center">Pinguicula</h2>
                            <p class="text-center">Possuo <b>7</b> tipos diferentes</p>
                            <p class="text-center"><span class="glyphicon glyphicon-camera"></span> P. wesser</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <B>Catalogo</B></a>
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>                        </p>
                    </div>
                </div> <!-- Pinguicula -->
                <h1>Tipos unicos</h1>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/biblys/img/biblys.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> Biblys</h3>
                            <p class="text-center">R$ 10,00</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/cephalotus/img/cephalotus.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> Cephalotus</h3>
                            <p class="text-center">R$ 10,00</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/drosophyllum/img/drosophyllum.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> Drosophyllum</h3>
                            <p class="text-center">R$ 10,00</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/genlise/img/genlisea.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> Genlisea</h3>
                            <p class="text-center">R$ 10,00</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/heliamphora/img/heliamphora.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> Heliamphora</h3>
                            <p class="text-center">R$ 10,00</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 width50">
                    <div class="thumbnail">
                        <img src="plantas/stylidium/img/stylidium.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center"><span class="glyphicon glyphicon-camera"></span> Stylidium</h3>
                            <p class="text-center">R$ 10,00</p>
                        </div>
                        <p class="text-center btn-meu">
                            <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <B>Cultivo</B></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row shadow">
                <h1 class="btn-meu">Suculentas<small> +80 types </small></h1>
                <div class="col-md-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="plantas/pinguicula/img/2wesser.jpg" alt="...">
                        <div class="caption">
                            <h4 class="text-center"><span class="glyphicon glyphicon-camera"></span> S.01</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="plantas/pinguicula/img/2wesser.jpg" alt="...">
                        <div class="caption">
                            <h4 class="text-center"><span class="glyphicon glyphicon-camera"></span> S.23</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="plantas/pinguicula/img/2wesser.jpg" alt="...">
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

            </div>
        </article>
        <footer class="row">
        </footer>
    </div>
</body>
</html>
