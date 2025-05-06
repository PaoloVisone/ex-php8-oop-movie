<?php

// Classe Genre
class Genre
{
    public $name;

    // Costruttore
    function __construct($name)
    {
        $this->name = $name;
    }
}


// Istanza dei generi
$action = new Genre("Action");
$romance = new Genre("Romance");
$sciFi = new Genre("Sci-Fi");
$comedy = new Genre("Comedy");
$drama = new Genre("Drama");
