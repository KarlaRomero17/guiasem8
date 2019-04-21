<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*Desarrollar un programa en Java que muestre por pantalla los números primos del
    1 al 1000 y todos los años bisiestos entre el año 2000 y 3000.*/
echo ("<br><br>****************NÚMEROS PRIMOS DEL 1 AL 1000*****************<br>");
$contador=0;
$i;
$j;
//valor booleano (bool)
$b=0;

        echo ("<br>");
for ($i=1; $i <= 1000 ; $i++) 
{ 
	for ($j=2; $j < $i ; $j++) 
        { 
		if($i%$j==0){
		$b=1;
                }
        }$contador += $i;
        if($b==0)
        {
        echo ($i . ", ");
        }
        else{
             $b=0;
            }            
}
      


//Años bisiestos entre el año 2000 al 3000
        echo("<br><br><br>**************AÑOS BISIESTOS ENTRE EL AÑO 2000 Y 3000*******************<br>");
        $contador2=0;
        $k;
        echo ("<br>");
        for($k = 2000; $k < 3001; $k++)
        {
            if($k % 4 == 0 && $k % 100 != 0 || $k % 400== 0){
            echo($k . ", ");
            $contador2++;
            }
        }
        
        //echo ("<br><br> Hay " . $contador2 . " número bisiestos entre el 2000 el 3000");
        


       
       
