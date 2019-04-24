<?php

 $codigo=$_POST['codigo'];
 $nombre=$_POST['nombre'];
 $sueldo=$_POST['sueldo'];
 
 $nueSueldo = array();
 
 $aum1=0.15;
 $aum2=0.12;
 $aum3=0.09;
 $aumento=0.0;
 $montoTot=0.0;
 
 if(isset($_POST['b2']))
{
 
 for($i=0;$i<count($codigo);$i++)
 {
     if($sueldo[$i]>0 && $sueldo[$i]<650)
     {
         $nueSueldo[$i]=$sueldo[$i]+($sueldo[$i]*$aum1);
         $montoTot+=$nueSueldo[$i];
         $aumento+=($sueldo[$i]*$aum1);
     }
     else if($sueldo[$i]>=650 && $sueldo[$i]<=1000)
     {
         $nueSueldo[$i]=$sueldo[$i]+($sueldo[$i]*$aum2);
         $montoTot+=$nueSueldo[$i];
         $aumento+=($sueldo[$i]*$aum2);
     }
     
     else if($sueldo[$i]>1000)
     {
         $nueSueldo[$i]=$sueldo[$i]+($sueldo[$i]*$aum3);
         $montoTot+=$nueSueldo[$i];
         $aumento+=($sueldo[$i]*$aum3);
     }
     else
     {
         echo "";
     }
 }
         
         for($i=0;$i<count($codigo);$i++)
         {
             echo '<br>Codigo del empleado: '.$codigo[$i];
             echo '<br>Nombre del empleado: '.$nombre[$i];
             echo '<br>Sueldo base del empleado: '.$sueldo[$i];
             echo '<br>Sueldo con aumento: '.$nueSueldo[$i]."<br><br>";
         }
         echo '<br>Total de la planilla de todos los empleado: '.$montoTot;
         echo '<br>Monto total de los aumentos: '.$montoTot;
         
 } 

?>