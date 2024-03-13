<?php 
require_once 'Pelicula.php';
require_once 'Cine.php';



$cine1 = new Cine("Cine Verdi", "Barcelona");
$cine2 = new Cine("Cine Verdi", "Madrid");

$pelicula1 = new Pelicula ("Lost in Traslation", "Sofia Coppola", 102);
$pelicula2 = new Pelicula ("La sociedad de la nieve", "Juan Antonio Bayona", 144);
$pelicula3 = new Pelicula ("Alcarràs", "Carla Simón", 120);
$pelicula4 = new Pelicula ("Priscilla", "Sofia Coppola", 113);
$pelicula5 = new Pelicula ("La extorsión", "Martino Zaidelis", 105);
$pelicula6 = new Pelicula ("Desconocidos", "Andrew Haigh", 105);
$pelicula7 = new Pelicula ("Zona de interés", "Jonathan Glazer", 105);
$pelicula8 = new Pelicula ("Anatomía de una caída", "Justine Triet", 150);

$cine1->agregarPelicula($pelicula1);
$cine1->agregarPelicula($pelicula2);
$cine1->agregarPelicula($pelicula3);
$cine1->agregarPelicula($pelicula4);
$cine1->agregarPelicula($pelicula6);

$cine2->agregarPelicula($pelicula5);
$cine2->agregarPelicula($pelicula7);
$cine2->agregarPelicula($pelicula8);



$cine1->mostrarCatalogo();
$cine1->mostrarPeliculaMasLarga();
$cine1->buscarNombreDirectorCine("Sofia Coppola");

$cine2->mostrarCatalogo();
$cine2->mostrarPeliculaMasLarga();
$cine2->buscarNombreDirectorCine("Jonathan Glazer");
?> 