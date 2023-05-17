<?php

    require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/genres.php';

$movies = [
    new movie("Avengers", "./img/avengers.jpg", ["Action",  "Superhero"], 2012,),
    new movie("Tokyo Drift", "./img/tokkyodrift.jpg", ["Action",  "Driving"], 2006,),
    new movie("Animatrix", "./img/animatrix.jpg",  ["Animation",  "Fantasy"], 2003,),
    new movie("G.I.T.S", "./img/ghostintheshell.jpg", ["Action",  "Cyberpunk"], 2017,),
    new movie("Gundam", "./img/gundam.jpg", ["Animation",  "Mecha"], 1979,),
    new movie("Avatar", "./img/avatar.jpg",  ["Action",  "Fantasy"], 2009,),
];
