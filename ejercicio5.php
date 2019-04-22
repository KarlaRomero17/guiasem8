<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$suma=2;
$sumaTotal=0;

while($suma<=1800)
{
    $suma=$suma+3;
    $sumaTotal=$sumaTotal+$suma;
    $suma=$suma+2;
    $sumaTotal=$sumaTotal+$suma;
}



  echo ("La respuesta a la suma de la serie 2,5,7,12,15,17...1800 es: ".$sumaTotal);
  
?>

