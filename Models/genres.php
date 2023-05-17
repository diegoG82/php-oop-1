<?php

class Genre {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$genres = [
    new Genre("Action"),
    new Genre("Animation"),
    new Genre("Cyberpunk"),
    new Genre("Driving"),
    new Genre("Fantasy"),
    new Genre("Superhero"),
];

return $genres;

?>
