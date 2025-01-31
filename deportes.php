<?php
require_once("./class/futbol.php");
require_once("./class/baloncesto.php");
require_once("./class/rugby.php");

$objetos=[];

for ($i=0;$i<5;$i++){
        $rand2=rand(1,3);


switch ($rand2){
    case 1 :
        $objetos[$i]= new futbol ("Pepes","12","rojo","16","12");
        echo "El nombre del equipo es" . $objetos[$i]->getNombre() ."<br>";
    break;
    case 2 :
        $objetos[$i]= new baloncesto ("Pepas","12","morado","15","90");
        echo "El nombre del equipo es" . $objetos[$i]->getNombre() ."<br>";
    break;
    case 3 :
        $objetos[$i]= new rugby ("Joses","12","morado","15","90");
        echo "El nombre del equipo es" . $objetos[$i]->getNombre() ."<br>";
    break;
}
}