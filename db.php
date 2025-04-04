<?php
require_once "./Traits/hasRating.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

$film1 = new Movie("2001: Odissea nello spazio", "Stanley Kubrick", 1968, new Genre("Fantascienza"));
$film2 = new Movie("Ex Machina", "Alex Garland", 2015, new Genre("Thriller"));
$film3 = new Movie("Inception", "Christopher Nolan", 2010, new Genre("Fantascienza"));
$film4 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, new Genre("Drammatico"));
$film5 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, new Genre("Crime"));
$film6 = new Movie("Interstellar", "Christopher Nolan", 2014, new Genre("Fantascienza"));
$film7 = new Movie("La La Land", "Damien Chazelle", 2016, new Genre("Musical"));

$movies = [$film1, $film2, $film3, $film4, $film5, $film6, $film7];

$film2->setRating(8.0);
$film3->setRating(8.8);
$film4->setRating(9.2);
$film5->setRating(8.9);
$film7->setRating(8.0);

