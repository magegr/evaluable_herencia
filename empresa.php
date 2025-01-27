<?php
/*Ejercicio 1.- Desarrollar un programa PHP que permita la gestión de una empresa agroalimentaria que trabaja con tres tipos de productos: productos frescos, productos refrigerados y productos congelados. Todos los productos llevan la siguiente información común: fecha de caducidad y número de lote.

A su vez, cada tipo de producto lleva información específica:

Los productos frescos deben llevar la fecha de envasado y el país de origen.
Los productos refrigerados deben llevar el código del organismo de supervisión alimentaria, la fecha de envasado, la temperatura de mantenimiento recomendada y el país de origen.
Los productos congelados deben llevar la fecha de envasado, el país de origen y la temperatura de mantenimiento recomendada. Además, existen tres tipos de productos congelados: congelados por aire, congelados por agua y congelados por nitrógeno.
    Los productos congelados por aire deben llevar la información de la composición del aire con que fue congelado (% de nitrógeno, % de oxígeno, % de dióxido de carbono y % de vapor de agua).
    Los productos congelados por agua deben llevar la información de la salinidad del agua con que se realizó la congelación en gramos de sal por litro de agua.
    Los productos congelados por nitrógeno deben llevar la información del método de congelación empleado y del tiempo de exposición al nitrógeno expresada en segundos.*/
$mero = new cong_nitr(31-12-2025, 15689,30-11-2024,'Francia',4,'congelado',40,600);
echo "El producto tiene una caducidad de".$mero -> $caducidad_producto." el numero de lote es ". $mero ->$lote_producto ."la fecha de envase es ". $mero ->$f_envase. " el pais de origen es " . $mero -> $pais_origen;


?>