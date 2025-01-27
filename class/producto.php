<?php
class producto
{
    protected $f_cad = "";
    protected $n_lote = "";

    public function __construct($caducidad_producto,$lote_producto) {
        $this-> f_cad = $caducidad_producto;
        $this-> n_lote = $lote_producto;
    }
}

?>