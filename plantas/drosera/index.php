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
    $title1 ='Drosera';
    $title2 ='Todas os tipos de Drosera que tenho';
    require '../../partes/header.php';
  ?>
</header>
<div class="container col-md-offset-1 col-md-10" >
    <article class="row ">
        <div class=" col-md-12 col-sm-12 col-xs-12 shadow">
            <h1 class="text-center"></h1>
<?php
$config = 'col-md-4 col-sm-6 col-xs-12 width50';
$preco = '1';
$values = array (
    0 => array(
        'imagem' => 'img/1afinis.jpg',
        'alt' => 'Drosera afinis',
        'hidden' => '',
        'nome' => 'D. afinis',
        'preco' => '7,00'
    ),
    8 => array(
        'imagem' => 'img/2binatamultifida.jpg',
        'alt' => 'D. binata multifida',
        'hidden' => '',
        'nome' => 'D. binata multifida ',
        'preco' => '10,00'
    ),
    2 => array(
        'imagem' => 'img/3burmannii.jpg',
        'alt' => 'D. burmannii',
        'hidden' => '',
        'nome' => 'D. burmannii ',
        'preco' => '7,00'
    ),
    3 => array(
        'imagem' => 'img/4burmanniired.jpg',
        'alt' => 'D. burmannii red',
        'hidden' => '',
        'nome' => 'D. burmannii red',
        'preco' => '10,00'
    ),
    10 => array(
        'imagem' => 'img/5burmanniihongkong.jpg',
        'alt' => 'D. burmannii hong-kong',
        'hidden' => '',
        'nome' => 'D. burmannii hong-kong',
        'preco' => '10,00'
    ),
    5 => array(
        'imagem' => 'img/6capensis.jpg',
        'alt' => ' D. capensis',
        'hidden' => '',
        'nome' => 'D. capensis',
        'preco' => '7,00'
    ),
    6 => array(
        'imagem' => 'img/7capilaris.jpg',
        'alt' => 'D. capilaris',
        'hidden' => '',
        'nome' => 'D. capilaris',
        'preco' => '7,00'
    ),
    7 => array(
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
    4 => array(
        'imagem' => 'img/11spatulata.jpg',
        'alt' => 'D. spatulata',
        'hidden' => '',
        'nome' => 'D. spatulata',
        'preco' => '7,00'
    ),
    1 => array(
        'imagem' => 'img/12prolifera.jpg',
        'alt' => 'D. prolifera',
        'hidden' => '',
        'nome' => 'D. prolifera',
        'preco' => '50,00'
    ),
);
require '../../partes/thumb.php';
?>
</div>
</article>
</div>
</body>
</html>
