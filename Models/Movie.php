<?php

// Creo l'oggetto
class movie
{
    public $title;
    public $image;
    public $genres;
    public $year;
   

    // Creo il costrutto
    public function __construct($_title, $_image, $_genres, $_year)
    {
        $this->title = $_title;
        $this->image = $_image;
        $this->genres = $_genres;
        $this->year = $_year;
    }
}
