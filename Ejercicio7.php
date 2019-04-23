<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
        <label>¿Cuantos empleados desea ingresar?</label><br>
        <input type="text" name="cantidad"><br><br>
        <input type="submit" name="enviar"><br><br>
    </body>
</html

<?php
  
if (isset($_POST['enviar'])){
    
$cantidad=$_POST['cantidad'];

echo '<form action=# method=POST>';

for($i=0;$i<$cantidad;$i++)
{
    echo '<br>Ingrese el codigo del trabajador'.($i+1) ."<input type=text name=codigo[]>";
    echo '<br>Ingrese el nombre del trabajador'.($i+1) ."<input type=text name=nombre[]>";
    echo '<br>Ingrese el sueldo del trabajador'.($i+1) ."<input type=text name=sueldo[]><br>";
}
echo '<input type=submit name=b2 value=enviar>';
echo '</form>';








}

?>
