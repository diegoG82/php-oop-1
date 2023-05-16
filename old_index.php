<?php
// // Creo l'oggetto:
// class movie {
//     public $title;
//     public $genre;
//     public $year;

//     // Creo il costrutto
//     public function __construct($_title, $_genre, $_year){
//         $this->title =$_title;
//         $this->genre =$_genre;
//         $this->year =$_year;
//     }

//     // Creo un metodo per stampare a video l'oggetto movie
//     public function movieinfo(){
//        echo "Title: "  . $this->title ."<br>";
//        echo "Genre: "  . $this->genre ."<br>";
//        echo "Year: "  . $this->year ."<br>";

//     }

// }


// Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.

class movie
{
    public $title;
    public $genres;
    public $year;

    // Creo il costrutto
    public function __construct($_title, $_genres, $_year)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    // Creo un metodo per stampare a video l'oggetto movie
    public function movieinfo()
    {
        echo "Title: "  . $this->title . "<br>";
        echo "Genres: "  . implode(",",  $this->genres)  . "<br>";
        echo "Year: "  . $this->year . "<br>";
        echo "<br>";
    }
}

$movie_1 = new movie("Avengers", ["Action",  "Superheroes"], 2012);
$movie_2 = new movie("Tokyo Drift", ["Action",  "Driving"], 2006);

$movie_1->movieinfo();
$movie_2->movieinfo();
