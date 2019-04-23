<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="#" method="post">
        <label>¿Cuántos ventas desea ingresar?</label><br>
        <input type="text" name="venta"><br><br>
        <input type="submit" name="enviar"><br><br>
        </form>
        <?php
        $conta=0;
        if(isset($_POST['enviar']))
        {
        $venta = $_POST['venta'];
        echo '<form method="post" action="#">';
        for($i=0; $i<$venta; $i++)
        {
        echo 'Valor '.($i + 1).': <input type="text" name="matriz['.$i.']" />'."<br>\n";
        $conta++;
        }
        echo '<input type="submit" name="calcular" value="calcular" />';
        echo '</form>';
        }
        if(isset($_POST['calcular']))
        { 
        $cantidad=0;
        $media;
        $matriz=$_POST['matriz'];
        $c=1;
        for($i=0; $i<$conta; $i++)
        {
            $cantidad= $cantidad + $matriz[$i];
            $c=$c+$i;
        }
      $media=$cantidad/$c;
        
        echo "La media de las ventas es: " . $media;
        }
        ?>
    </body>
</html>
