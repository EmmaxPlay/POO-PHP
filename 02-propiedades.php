<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del producto';
    public $precio = '0';
}

$bebida = new MenuRestaurant();
$bebida->nombre = "jugo de naranja";
$bebida->precio = "$40";


var_dump($bebida);

$postre = new MenuRestaurant();
$postre->nombre = "pastel";
$postre->precio = "$100";
var_dump($postre);