<?php
require_once ("deportes1.php");
class rugby extends deportes
{
    protected $color_equipo = " ";
    protected $asistencias = " ";
    protected $tarjetas = " ";

    public function __construct($nombre,$participantes,$color_equipo,$asistencias,$tarjetas) {
        parent::__construct ($nombre, $participantes);
        $this->color_equipo = $color_equipo;
        $this->asistencias = $asistencias ;
        $this-> tarjetas = $tarjetas;
    }
    public function getColor() {
        return $this-> color_equipo;
    }

    public function getAsistencia() {
        return $this->asistencias;
    }

    public function getTarjeta() {
        return $this-> tarjetas;
    }
}
?>
?>