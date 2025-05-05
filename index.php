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

// Classe Movie
class Movie
{
    public $nome;
    public $regista;
    public $durata;
    public $data;
    public $genere;

    // Metodo
    function isOld()
    {
        if ($this->data < 2000) {
            return "Il film '{$this->nome}' diretto da {$this->regista}, della durata di {$this->durata}, è uscito prima del 2000";
        }
        return null;
    }

    // Costruttore
    function __construct($nome, $regista, $durata, $data, $genere)
    {
        $this->nome = $nome;
        $this->regista = $regista;
        $this->durata = $durata;
        $this->data = $data;
        $this->genere = $genere;
    }
}

// Istanza dei generi
$action = new Genre("Action");
$romance = new Genre("Romance");
$sciFi = new Genre("Sci-Fi");

// Istanza dei film
$matrix = new Movie("Matrix", "Lana Wachowski, Lilly Wachowski", "2h 16m", 1999, $sciFi);
$titanic = new Movie("Titanic", "James Cameron", "3h 14m", 1998, $romance);
$inception = new Movie("Inception", "Christopher Nolan", "2h 28m", 2010, $action);

var_dump($matrix);
var_dump($titanic);
var_dump($inception);
var_dump($matrix->isOld());
var_dump($titanic->isOld());
var_dump($inception->isOld());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

</body>

</html>