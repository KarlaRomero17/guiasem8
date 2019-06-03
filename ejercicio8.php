<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->     
<html>   
    <head>  
        <meta charset="UTF-8"> 
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
        <label>¿Cuántos números desea ingresar?</label><br>
        <input type="text" name="cantidad"><br><br>
        <input type="submit" name="enviar"><br><br>
    </body>
</html>
<?php
$conta=0;
if(isset($_POST['enviar']))
{
$cantidad = $_POST['cantidad'];
echo '<form method="post" action="#">';
for($i=0; $i<$cantidad; $i++)
{
echo 'Valor '.($i + 1).': <input type="text" name="matriz['.$i.']" />'."<br>\n";
$conta++;
}
echo '<input type="submit" name="calcular" value="calcular" />';
echo '</form>';

}
if(isset($_POST['calcular']))
{ 
$num=$_POST['matriz'];
$conpo=0; 
$acum=0; 
$promedio;
$connega=0;
$con=0;
$pronto; 
$acumtotal=0;
for($i=0; $i<$conta; $i++)
{
      if ($num[$i]>0)
        {
            $conpo=$conpo+1; //leidos mayores a cero
            $acum=$acum+$num[$i];
            
        }
        else if ($num[$i]<0)
        {
            $connega=$connega+1;
        }
        
        $acumtotal=$acumtotal+$num[$i];
        $con=$con+1;
  }
  $pronto=$acumtotal/$con;
  $promedio=$acum/$conpo;
       echo("<br>Números ingresados mayores a cero: " . $conpo);
       echo("<br>Números positivos: " . $conpo . " Promedio de positivos: ". $promedio);
    echo("<br>Este es un cambio realizado para completar el formulario");
      echo("<br>Números negativos: " . $connega);
       echo("<br>Promedio de todos los números ingresados: " . $pronto);
     }
