<?php
class HospedajeController
{
    private $hospedajeModel;

    public function __construct(HospedajeModel $hospedajeModel)
    {
        $this->hospedajeModel = $hospedajeModel;
    }

    public function buscarHospedajesPorNombre($input)
    {
        return $this->hospedajeModel->buscarHospedajesPorNombre($input);
    }
}
?>
