<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="ejercicio1.php" method="post" name="frm">
        <label>Ingrese un número: </label>
        <br><br>
        <input type="text" name="num" value="" />
        <br><br>
        <input type="submit" name="submit" />
    </form>
    </body>
    
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Desarrolle un programa que encuentre el factorial de un número; con ingresos de
datos desde el teclado*/

    //echo ("<form action=# method=post><br>Ingrese un numero: <br> "  . "<input type=text name=num <br> </form>");
 
 $operacion = 1;
 //$num=htmlspecialchars($_POST["num"]);
//$num=$_POST["num"];
//$numHtml= filter_input(INPUT_POST, $num);
//if(isset(($_POST["submit"]))

 
 ///Funciones de filtrado para que no se de error:
$num= filter_input(INPUT_POST, "num");
if(filter_input(INPUT_POST, "num"))
 {
     
     $num=htmlspecialchars($_POST["num"]);
     if($num!="")
         {
         // echo "OK";
          //validar formulario post
    /* var_dump($_POST);*/

     //$num=$_POST["num"];
     //Es para validar var_dump($num);
     
        for ($i = 1; $i <= $num; $i++) {
            $operacion *= $i;
        }
    echo ("<br>------------RESULTADO - Numero Factorial-----------------");
    echo ("<br>El factorial del numero es: " .  $operacion . "<br>");
         }
 else 
     {
     echo "Ingrese un número";
     } 
 }
 
?>   
</html> 




