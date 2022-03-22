<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del Producto';
    public $precio = 0;

    public function obtenerProductoyNombre(){
        echo "el producto " . $this->nombre . "Tiene un precio de " . $this->precio;
    }
}


// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = "jugo de naranja";
$bebida->precio = 100;
$bebida->obtenerProductoyNombre();

echo "<br/>";

$postre = new MenuRestaurant();
$postre->nombre = "Pastel de chocolate";
$postre->precio = 150;
$postre->obtenerProductoyNombre();

echo "<br/>";

$corte = new MenuRestaurant();
$corte->nombre = "Rib Eye ";
$corte->precio = 750;
$corte->obtenerProductoyNombre();