<?php
trait HasRating
{
    private $rating = "Non ancora inserito";

    public function setRating($a)
    {
        if ($a <= 10 && $a >= 0) {
            $this->rating = $a;
        }
    }

    public function getRating()
    {
        return $this->rating;
    }
}
