<?php 

//Cajoneras o arreglos donde los cajones o elementos tienen nombres asignados por numeros
//ARREGLOS INDEXADOS
$productos=array("arroz","lentejas","carne");
print_r($productos);
echo("<br>");
echo($productos[0]);

//ARREGLOS ASOCIATIVOS
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"arroz","producto2"=>"lentejas","producto3"=>"carne","producto4"=>"aceite");

print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto1"]);

//CICLO FOREACH
echo("<br>");
echo("<br>");
foreach($productosAsociativos as $clave=>$valor){

    echo($clave.": ".$valor);
    echo("<br>");
  

}


?>