<?php
require_once ("congelados.php");
class cong_agua extends congelados
{
    protected $sal = "";
    public function __construct($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend,$sal) {
        parent::__construct ($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend);
        $this->sal = $sal;
    }
}



?>