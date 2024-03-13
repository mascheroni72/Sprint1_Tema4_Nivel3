<?php
class Pelicula {
    private string $titulo;
    private string $director;
    private int $duracion;

    public function __construct(String $titulo, string $director, int $duracion) {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->duracion = $duracion;  
    }
    public function getTitulo () : string {
        return $this->titulo;
    }
     public function getDirector () : string {
        return $this->director;
    }
    public function getDuracion () : int {
        return $this->duracion;
    }
}
?>