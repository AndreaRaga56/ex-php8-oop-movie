<?php

require_once "./Traits/hasRating.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

$film1 = new Movie("2001: Odissea nello spazio", "Stanley Kubrick", 1968, new Genre("Fantascienza"));
$film2 = new Movie("Ex Machina", "Alex Garland", 2015, new Genre("Thriller"));

echo $film1->getInfo();
echo "<br>";
echo "<br>";
echo $film2->getInfo();
echo "<br>";
echo "<br>";

$film1->setRating(9);
echo $film1->getRating();

var_dump($film1);