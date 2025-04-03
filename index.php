<?php

class Genre{
    public $genere;
    public $vietatoAiMinori;

    public function __construct($_genere, $_vietatoAiMinori)
    {
        $this->genere = $_genere;
        $this->vietatoAiMinori = $_vietatoAiMinori;
    }
}

class Movie
{
    public $titolo;
    public $regista;
    public $genere;
    protected $anno;

    public function getAnno()
    {
        return "L'anno di pubblicazione è il " . $this->anno;
    }

    public function getInfo(){
        return "Il titolo del film è " . $this->titolo . ", è stato diretto da " . $this->regista . " e l'anno di pubblicazione è il " . $this->anno;
    }

    public function __construct($_titolo, $_regista, $_anno, Genre $genere)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
    }
}


$film1 = new Movie("2001: Odissea nello spazio", "Stanley Kubrick", 1968, new Genre("Fantascienza", false));
$film2 = new Movie("Ex Machina", "Alex Garland", 2015, new Genre("Thriller", false));

echo $film1->getInfo();
echo "<br>";
echo $film2->getInfo();