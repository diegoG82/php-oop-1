<?php

require_once './Models/Movie.php';

$movies = [
    new movie("Avengers", "./img/avengers.jpg", ["Action",  "Superheroes"], 2012, ),
    new movie("Tokyo Drift", "./img/tokkyodrift.jpg", ["Action",  "Driving"], 2006, ),
    new movie("Animatrix","./img/animatrix.jpg",  ["Animation",  "Fantasy"], 2003, ),
];
