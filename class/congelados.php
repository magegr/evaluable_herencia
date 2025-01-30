<?php
require_once ("producto.php");
class congelados extends producto
{
    protected $f_envase = " ";
    protected $pais_origen = " ";
    protected $temp_recomend = " ";

    public function __construct($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend) {
        parent::__construct ($caducidad_producto,$lote_producto);
        $this-> f_envase = $f_envase;
        $this-> pais_origen = $pais_origen;
        $this-> temp_recomend = $temp_recomend;
    }
    public function getFechaEnvase() {
        return $this->f_envase;
    }

    public function getPaisOrigen() {
        return $this->pais_origen;
    }

    public function getTempRecomend() {
        return $this->temp_recomend;
    }
}
?>