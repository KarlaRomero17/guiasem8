<! DOCTYPE html>
< html >
    < cabeza >
        < meta  charset = " UTF-8 " >
        < título > </ título >
    </ cabeza >
    < cuerpo >
         < form  action = " # "  method = " post " >
        < Etiqueta > ¿Cuantos ventas DESEA ingresar? </ Etiqueta > < br >
        < Entrada  tipo = " texto "  nombre = " venta " > < br > < br >
        < Entrada de  tipo = " enviar "  nombre = " enviar " > < br > < br >
        </ form >
        <? php
        $ conta = 0 ;
        if ( isset ( $ _POST [ ' enviar ' ]))
        {
        $ venta  =  $ _POST [ ' venta ' ];
        echo  ' <form method = "post" action = "#"> ' ;
        para ( $ i = 0 ; $ i < $ venta ; $ i ++ )
        {
        echo  ' valor ' . ( $ i  +  1 ) . ' : <input type = "text" name = "matriz [ ' . $ i . ' ]" /> ' . " <br> \ n " ;
        $ conta ++ ;
        }
        echo  ' <input type = "submit" name = "calcular" value = "calcular" /> ' ;
        echo  ' </form> ' ;
        }
        if ( isset ( $ _POST [ ' calcular ' ]))
        { 
        $ cantidad = 0 ;
        $ media ;
        $ matriz = $ _POST [ ' matriz ' ];
        $ c = 1 ;
        para ( $ i = 0 ; $ i < $ conta ; $ i ++ )
        {
            $ cantidad =  $ cantidad  +  $ matriz [ $ i ];
            $ c = $ c + $ i ;
        }
      $ media = $ cantidad / $ c ;
        
        echo  " La media de las ventas es: "  .  $ media ;
        }
        ? >
    </ cuerpo >
</ html >

