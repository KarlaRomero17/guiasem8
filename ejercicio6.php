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
        <label>¿Ingrese un número positivo?</label><br>
        <input type="text" name="numero"><br><br>
        <input type="submit" name="enviar"><br><br>
        </form>
        <?php
        if(isset($_POST['numero']))
        {
        $numero=$_POST['numero'];
  
        if($numero <= 0) echo "Error. El numero no es positivo"; 
            else 
            { 
            echo "La sucesion de Ulam es la siguiente: \n\n"; 
            while($numero!=1) 
            { 
            echo $numero .", "; 
            if($numero%2) 
            {
                $numero = $numero*3 + 1; 
            }
            else 
            {
                $numero /= 2; 
            } 
            }
           echo "1."; 
            } 
        }

        ?>
    </body>
</html>
