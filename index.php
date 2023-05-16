<?php
// Creo l'oggetto:
class movie {
    public $title;
    public $genre;
    public $year;

    // Creo il costrutto
    public function __construct($_title, $_genre, $_year){
        $this->title =$_title;
        $this->genre =$_genre;
        $this->year =$_year;
    }

    // Creo un metodo per stampare a video l'oggetto movie
    public function movieinfo(){
       echo "Title: "  . $this->title ."<br>";
       echo "Genre: "  . $this->genre ."<br>";
       echo "Year: "  . $this->year ."<br>";

    }
    
}

$movie_1 =new movie("Avengers", "Action", 2012);
$movie_2 =new movie("Tokyo drift", "Action", 2006);

$movie_1->movieinfo();
$movie_2->movieinfo();