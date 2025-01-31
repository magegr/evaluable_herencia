<?php
class deportes
{
    protected $nombre = "";
    protected $participantes = "";

    public function __construct($nombre, $participantes) {
        $this-> nombre = $nombre;
        $this-> participantes = $participantes;
    }
    public function getNombre() {
        return $this->nombre; 
    }

    public function getParticipantes() {
        return $this->participantes;
    }

}

?>