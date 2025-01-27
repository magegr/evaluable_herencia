<?php
require_once ("producto.php");
class frescos extends producto
{
    protected $f_envase = "";
    protected $pais_origen = "";

    public function __construct($caducidad_producto,$lote_producto,$f_envase,$pais_origen) {
        parent::__construct ($caducidad_producto,$lote_producto);
        $this-> f_envase = $f_envase;
        $this-> pais_origen = $pais_origen;
    }
}
?>