<?php
require_once ("congelados.php");
class cong_aire extends congelados
{
    protected $nitrogeno = "";
    protected $oxigeno = "";
    protected $dioxido = "";
    protected $vapor = "";

    public function __construct($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend,$nitrogeno,$oxigeno,$dioxido,$vapor) {
        parent::__construct ($caducidad_producto,$lote_producto,$f_envase,$pais_origen,$temp_recomend);
        $this->nitrogeno = $nitrogeno;
        $this-> oxigeno = $oxigeno;
        $this-> dioxido = $dioxido;
        $this-> vapor = $vapor;
    }
    public function getNitrogeno() {
        return $this->nitrogeno; 
    }

    public function getOxigeno() {
        return $this->oxigeno;
    }
    public function getDioxido(){
        return $this -> dioxido;
    }
    public function getVapor(){
        return $this -> vapor;
    }
}
?>