<?php
class Cine {
    private string $nomCine;
    private string $poblacion;
    private array $peliculas = [];

    public function __construct(string $nomCine, string $poblacion) {
        $this->nomCine = $nomCine;
        $this->poblacion = $poblacion;
    }
    public function agregarPelicula(Pelicula $pelicula) : void {
        $this->peliculas [] = $pelicula;
    }
    public function mostrarCatalogo() : void {
        echo "Actualmente en el " . $this->nomCine . " de " . $this->poblacion . " se proyectan las siguientes películas: " . PHP_EOL;
        foreach ($this->peliculas as $pelicula) {
            echo $pelicula->getTitulo() . " dirigida por " . $pelicula->getDirector() . " con una duración de " . $pelicula->getDuracion() . " minutos". PHP_EOL;
        }
    }
    public function mostrarPeliculaMasLarga() : void {
        $peliMasLarga = 0;
        $nomPeliMasLarga = "";
        foreach ($this->peliculas as $pelicula) {
            if ($pelicula-> getDuracion() > $peliMasLarga) {
                $peliMasLarga = $pelicula->getDuracion();
                $nomPeliMasLarga = $pelicula->getTitulo();
            }
        }
        echo "La película más larga es: " . $nomPeliMasLarga . " con una duración de " . $peliMasLarga . " minutos y la proyectan en el " . $this->nomCine. " ,ubicado en " . $this->poblacion . PHP_EOL;
    }
    public function buscarNombreDirectorCine (string $nomDirector) : void {
        foreach($this->peliculas as $pelicula) {
            if($pelicula->getDirector() == $nomDirector){
                echo " La película " . $pelicula->getTitulo() . " dirigida por " . $nomDirector . " se proyecta en " . $this->nomCine . " ,situado en " . $this->poblacion . PHP_EOL;
            }
        }
    }
}
?>