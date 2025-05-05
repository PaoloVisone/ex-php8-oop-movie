<?php

class Movie
{
    public $nome;
    public $regista;
    public $durata;
    public $data;

    function __construct($nome, $regista, $durata, $data)
    {
        $this->nome = $nome;
        $this->regista = $regista;
        $this->durata = $durata;
        $this->data = $data;
    }
}


// Instanze

$matrix = new Movie("Matrix", " Lana Wachowski, Lilly Wachowski", "2h 16m", "7 maggio 1999");
$titanic = new Movie("Titanic", "James Cameron", "3h 14m", "16 gennaio 1998");
$inception = new Movie("Inception", "Christopher Nolan", "2h 28m", "24 settembre 2010");


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