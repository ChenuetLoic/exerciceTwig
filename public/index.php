<?php
require '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);


$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$animals = ['vache', 'chèvre', 'lion', 'belette', 'croco'];
echo $twig->render('base.html.twig', [
    'products' => $products ,
    'animals' => $animals ,
]);




