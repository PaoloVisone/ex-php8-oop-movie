<?php

class Movie
{
    public $nome;
    public $regista;
    public $durata;
    public $data;

    function isOld()
    {
        if ($this->data < 2000) {
            return "Il film '{$this->nome}' diretto da {$this->regista}, della durata di {$this->durata}, è uscito prima del 2000";
        }
        return null;
    }

    function __construct($nome, $regista, $durata, $data)
    {
        $this->nome = $nome;
        $this->regista = $regista;
        $this->durata = $durata;
        $this->data = $data;
    }
}


// Instanze

$matrix = new Movie("Matrix", " Lana Wachowski, Lilly Wachowski", "2h 16m", 1999);
$titanic = new Movie("Titanic", "James Cameron", "3h 14m", 1998);
$inception = new Movie("Inception", "Christopher Nolan", "2h 28m", 2010);

var_dump($matrix);
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