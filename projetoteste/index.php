<?php
require_once "classe/Product.class.php";

$p1 = new Product("Sorvete de Chocolate", 12345, 12.54, 12);

echo "<pre>";
var_dump($p1);
echo "</pre>";
