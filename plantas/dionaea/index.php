<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../../partes/scripts2.php'; ?>
</head>
<body>
<header>
    <?php
    require '../../partes/nav-links.php';
    require '../../partes/navbar.php';
    $title1 ='Dionaea Muscipula';
    $title2 ='Todas os tipos de Dionaeas que tenho';
    require '../../partes/header.php';
    ?>
</header>
<div class="container col-md-offset-1 col-md-10" >
    <article class="col-md-12 col-sm-12 col-xs-12" id="cat">
        <div class=" row shadow">
            <h3 class="text-center"></h3>
            <?php
            $config = 'col-md-4 col-sm-6 col-xs-12 width50';
            $preco = '3';
            $values = array (
                'dionaea' => array (
                0 => array(
                    'imagem' => 'img/1tipica_a.jpg',
                    'alt' => 'Dionaea tipica',
                    'hidden' => '',
                    'nome' => 'DM. commum',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                1 => array(
                    'imagem' => 'img/2reddragon_m.jpg',
                    'alt' => 'D. Red Dragon',
                    'hidden' => '',
                    'nome' => 'DM. red dragon ',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                2 => array(
                    'imagem' => 'img/3redshark_m.jpg',
                    'alt' => 'D. red shark',
                    'hidden' => '',
                    'nome' => 'DM. red shark ',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                3 => array(
                    'imagem' => 'img/10sawtooh_m.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. sawtooth',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                4 => array(
                    'imagem' => 'img/5g3xg14_m.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. g3xg14',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                5 => array(
                    'imagem' => 'img/6microdente_m.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. microdente',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                6 => array(
                    'imagem' => 'img/7star_m.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. star',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                7 => array(
                    'imagem' => 'img/9xo3_m.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. xo3',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                8 => array(
                    'imagem' => 'img/4b52_m.jpg',
                    'alt' => 'D. b52',
                    'hidden' => '',
                    'nome' => 'DM. b52 ',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                9 => array(
                    'imagem' => 'img/8swg_m.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. south west giant',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                ),
                10 => array(
                    'imagem' => 'img/11uksawtooth2.jpg',
                    'alt' => '',
                    'hidden' => '',
                    'nome' => 'DM. uk sawtooth II',
                    'p1' => '10,00',
                    'p2' => '20,00',
                    'p3' => '40,00',
                )
                )
            );
            require '../../partes/thumb.php';
            print_r($values['dionaea'][2]);                ?>
        </div>
    </article>
    <section class="col-md-6 col-sm-6 col-xs-12 pdr" id="cult">
        <div class="row shadow">
            <h1>Cultivo</h1>
        </div>
    </section>
    <section class="col-md-6 col-sm-6 col-xs-12 pdl" id="sem">
        <div class="row shadow">
            <h1>Sementes<small> a venda</small></h1>
        </div>
    </section>
</div>
</body>
</html>
