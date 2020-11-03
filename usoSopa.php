<?php 

//Incluir el archivo donde esta mi clase
include("Sopa.php");

//Tengo que sacar la copia (Instancia de la clase)
//Crear un Objeto
$sancocho= new Sopa();


//Acceder a un atributo
$sancocho->cantidadAgua="2 LITROS";
echo($sancocho->cantidadAgua);


//Accder a un metodo
$sancocho->preparar();





?>