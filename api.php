<?php
    header("content-type: application/json ");
    header('Access-Control-Allow-Origin: *');

    //Operador Suma
    $PRECIO = (integer) 2000;
    $IVA = (integer) 400;
   $TOTAL = (string) number_format($PRECIO + $IVA, 0, ",", ".");
  

   //Operador resta '-'
   $_TOTAL = (integer) 5000;
   $DESCUENTO = (integer) 3200;
   $OFERTA = (string) number_format($_TOTAL - $DESCUENTO, 0, ",", ".");
   

   //Operador multiplicacion '*'
   $_PRECIO = (integer) 90000;
   $_IVA = (string) number_format($_PRECIO * 0.16, 0, ",", ".");
   

   //Operador division '/'
   $SUMA = (integer) 9500;
   $TOTAL_MEDIA = (integer) 2000;
   $MEDIA = (string) number_format($SUMA / $TOTAL_MEDIA, 2, ",", ".");
  
    //operador Modulo 
    $_SUMA =(integer) 15;
    $RESTO =(string)number_format($_SUMA% 6, 2, ",", ".");
  
    
    echo <<<JSON
    {
        "SUMA": "La suma de los valores es: $${!${''} = $TOTAL}",
        "RESTA": "La resta de los valores es: $${!${''} = $OFERTA}",
        "MULTIPLICACION": "El iva es de: $${!${''} = $_IVA} ",
        "DIVISION": "La media es de: $${!${''} = $MEDIA}",
        "MODULO" :"El resto es: $RESTO ",
        "SERVISOR": "${!${''} = $_SERVER['HTTP_HOST']}"
    }

    
JSON;





?>