<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
        <label>¿De cuantos empleados desea calcular el Aumento?</label><br>
        <input type="text" name="cantidad"><br><br>
        <input type="submit" name="enviar"><br><br>
        </form>
   
<?php

if(isset($_POST['enviar']))
{
    $cantidad=$_POST['cantidad'];
    
    echo '<form action=recibirEjer7.php method=POST>';
    
    for($i=0;$i<$cantidad;$i++)
    {
        echo '<br><br>Ingrese el codigo del Empleado'.($i+1)."<input type=text name=codigo[]>";
        echo '<br>Ingrese el nombre del Empleado'.($i+1)."<input type=text name=nombre[]>";
        echo '<br>Ingrese el sueldo base del Empleado'.($i+1)."<input type=text name=sueldo[]>";
    }
    echo "<input type=submit name=b2 value=enviar>";
    echo "</form>";
    
}
else
{
    echo "";
    echo "Esre ejercicio si funciona xd"
}

?>
 </body>
</html>
