<?php
class HospedajeRepository
{
    private $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function buscarPorNombre($input)
    {

        $search_query = $this->conn->real_escape_string($input);

        $sql = "SELECT * FROM hospedajes WHERE nombre LIKE '%$search_query%' ORDER BY nombre";
        $result = $this->conn->query($sql);

        $hospedajes = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $hospedaje = new Hospedaje(
                    $row['nombre'],
                    $row['tipo'],
                    $row['estrellas'],
                    $row['habitacion'],
                    $row['apartamentos_disponibles'],
                    $row['capacidad_adultos'],
                    $row['ciudad'],
                    $row['provincia']
                );
                $hospedajes[] = $hospedaje;
            }
        }

        return $hospedajes;
    }
}
?>
