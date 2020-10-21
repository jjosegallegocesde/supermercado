<?php 

//arreglo 1 dimension
$precios=array(1600,5000,2500);
$nombres=array("arroz","salchichas","azucar");
$marcas=array("Diana","Zenú","Incauca");


//arreglo multidimensional
$productos=array(
    "producto1"=>array("arroz",1600,"Diana"),
    "producto2"=>array("salchichas",5000,"Zenú"),
    "producto3"=>array("azucar",2500,"incauca"),
    "producto4"=>array("aceite",7000,"Premier")
);

//Abrir cada cajon del arreglo y sacare los elementos de ese cajon:
foreach($productos as $producto){

    
    echo($producto[0]);
    echo("<br>");


}








?>