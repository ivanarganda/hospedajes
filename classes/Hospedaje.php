<?php
class Hospedaje
{
    private $nombre;
    private $tipo;
    private $estrellas;
    private $habitacion;
    private $apartamentosDisponibles;
    private $capacidadAdultos;
    private $ciudad;
    private $provincia;

    public function __construct($nombre, $tipo, $estrellas, $habitacion, $apartamentosDisponibles, $capacidadAdultos, $ciudad, $provincia)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->estrellas = $estrellas;
        $this->habitacion = $habitacion;
        $this->apartamentosDisponibles = $apartamentosDisponibles;
        $this->capacidadAdultos = $capacidadAdultos;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
    }

    public function getDescripcion()
    {
        $ubicacion = $this->ciudad . ', ' . $this->provincia;

        if ($this->tipo == 'hotel') {
            return "Hotel {$this->nombre}, {$this->estrellas} estrellas, {$this->habitacion}, $ubicacion";
        } elseif ($this->tipo == 'apartamento') {
            return "Apartamentos {$this->nombre}, {$this->apartamentosDisponibles} apartamentos, {$this->capacidadAdultos} adultos, $ubicacion";
        }

        return '';
    }
}
?>
