<?php
class producto
{
    protected $fecha_caducidad = "";
    protected $n_lote = "";

    public function __construct($caducidad_producto,$lote_producto) {
        $this-> fecha_caducidad = $caducidad_producto;
        $this-> n_lote = $lote_producto;
    }
    public function getcaducidad() {
        return $this->fecha_caducidad; 
    }

    public function getNumeroLote() {
        return $this->n_lote;
    }

}

?>