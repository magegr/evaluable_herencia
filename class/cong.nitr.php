<?php
require_once ("congelados.php");
class cong_nitr extends congelados
{
    protected $metodo = "";
    protected $tiem_expo = "";
    protected $nitr_segun = "";
    public function __construct($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend,$metodo,$tiem_expo,$nitr_segun) {
        parent::__construct ($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend);
        $this->metodo = $metodo;
        $this->tiem_expo = $tiem_expo;
        $this->nitr_segun = $nitr_segun;
    }
}



?>