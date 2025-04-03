<?php
class Movie
{
    public $titolo;
    public $regista;
    protected $anno;

    public function getAnno()
    {
        return "L'anno di pubblicazione è il" . $this->anno;
    }

    public function getInfo(){
        return "Il titolo del film è ". $this->titolo .", è stato diretto da " . $this->regista ." e l'anno di pubblicazione è il" . $this->anno;
    }

    public function __construct($_titolo, $_regista, $_anno)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
    }
}
