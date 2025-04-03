<?php 
class Movie
{
    public $titolo;
    public $regista;
    public Genre $genere;
    protected $anno;

    use HasRating;

    public function getAnno()
    {
        return "L'anno di pubblicazione è il " . $this->anno;
    }

    public function getInfo(){

        $risposta = "Il titolo del film è " . $this->titolo . ", è stato diretto da " . $this->regista . " e l'anno di pubblicazione è il " . $this->anno . ". <br>Il genere è " . $this->genere->genere;

        return $risposta;
    }

    public function __construct($_titolo, $_regista, $_anno, Genre $_genere)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->genere = $_genere;
    }
}