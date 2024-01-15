<?php
class HospedajeModel
{
    private $hospedajeRepository;

    public function __construct(HospedajeRepository $hospedajeRepository)
    {
        $this->hospedajeRepository = $hospedajeRepository;
    }

    public function buscarHospedajesPorNombre($input)
    {
        return $this->hospedajeRepository->buscarPorNombre($input);
    }
}
?>
