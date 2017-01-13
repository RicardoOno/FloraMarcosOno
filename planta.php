<?php require 'partes/scripts.php'; ?>
<article class="container-fluid">
    <?php
$w =$_GET['cod'];
$config = 'col-md-3 col-sm-6 col-xs-12 width50';
$preco = '3';
$values = array (
    'dionaea' => array (
        0 => array(
            'preco' => '3',
        ),
        1 => array(
            'imagem' => 'img/1tipica_a.jpg',
            'alt' => 'Dionaea tipica',
            'hidden' => '',
            'nome' => 'DM. commum',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        2 => array(
            'imagem' => 'img/2reddragon_m.jpg',
            'alt' => 'D. Red Dragon',
            'hidden' => '',
            'nome' => 'DM. red dragon ',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        3 => array(
            'imagem' => 'img/3redshark_m.jpg',
            'alt' => 'D. red shark',
            'hidden' => '',
            'nome' => 'DM. red shark ',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        4 => array(
            'imagem' => 'img/10sawtooh_m.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. sawtooth',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        5 => array(
            'imagem' => 'img/5g3xg14_m.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. g3xg14',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        6 => array(
            'imagem' => 'img/6microdente_m.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. microdente',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        7 => array(
            'imagem' => 'img/7star_m.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. star',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        8 => array(
            'imagem' => 'img/9xo3_m.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. xo3',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        9 => array(
            'imagem' => 'img/4b52_m.jpg',
            'alt' => 'D. b52',
            'hidden' => '',
            'nome' => 'DM. b52 ',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        10 => array(
            'imagem' => 'img/8swg_m.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. south west giant',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        ),
        11 => array(
            'imagem' => 'img/11uksawtooth2.jpg',
            'alt' => '',
            'hidden' => '',
            'nome' => 'DM. uk sawtooth II',
            'p1' => '10,00',
            'p2' => '20,00',
            'p3' => '40,00',
        )
    ),
    'drosera' => array (
        0 => array(

            'preco' => '1',
        ),
        1 => array(
            'imagem' => 'img/1afinis.jpg',
            'alt' => 'Drosera afinis',
            'hidden' => '',
            'nome' => 'D. afinis',
            'preco' => '7,00'
        ),
        2 => array(
            'imagem' => 'img/2binatamultifida.jpg',
            'alt' => 'D. binata multifida',
            'hidden' => '',
            'nome' => 'D. binata multifida ',
            'preco' => '10,00'
        ),
        3 => array(
            'imagem' => 'img/3burmannii.jpg',
            'alt' => 'D. burmannii',
            'hidden' => '',
            'nome' => 'D. burmannii ',
            'preco' => '7,00'
        ),
        4 => array(
            'imagem' => 'img/4burmanniired.jpg',
            'alt' => 'D. burmannii red',
            'hidden' => '',
            'nome' => 'D. burmannii red',
            'preco' => '10,00'
        ),
        5 => array(
            'imagem' => 'img/5burmanniihongkong.jpg',
            'alt' => 'D. burmannii hong-kong',
            'hidden' => '',
            'nome' => 'D. burmannii hong-kong',
            'preco' => '10,00'
        ),
        6 => array(
            'imagem' => 'img/6capensis.jpg',
            'alt' => ' D. capensis',
            'hidden' => '',
            'nome' => 'D. capensis',
            'preco' => '7,00'
        ),
        7 => array(
            'imagem' => 'img/7capilaris.jpg',
            'alt' => 'D. capilaris',
            'hidden' => '',
            'nome' => 'D. capilaris',
            'preco' => '7,00'
        ),
        8 => array(
            'imagem' => 'img/8filiformesred.jpg',
            'alt' => 'D. filiformes red',
            'hidden' => '',
            'nome' => 'D. filiformes red',
            'preco' => '10,00'
        ),
        9 => array(
            'imagem' => 'img/10madagascariense.jpg',
            'alt' => 'D. madagascariense',
            'hidden' => '',
            'nome' => 'D. madagascariense',
            'preco' => '10,00'
        ),
        10 => array(
            'imagem' => 'img/11spatulata.jpg',
            'alt' => 'D. spatulata',
            'hidden' => '',
            'nome' => 'D. spatulata',
            'preco' => '7,00'
        ),
        11 => array(
            'imagem' => 'img/12prolifera.jpg',
            'alt' => 'D. prolifera',
            'hidden' => '',
            'nome' => 'D. prolifera',
            'preco' => '50,00'
        ),
    ),
);

require 'partes/thumb.php';
?>
</article>
