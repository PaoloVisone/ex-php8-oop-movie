<?php

// Istanza dei film
$matrix = new Movie("Matrix", "Lana Wachowski, Lilly Wachowski", "2h 16m", 1999, [$sciFi, $action]);
$titanic = new Movie("Titanic", "James Cameron", "3h 14m", 1998, [$romance, $drama]);
$inception = new Movie("Inception", "Christopher Nolan", "2h 28m", 2010, [$action, $sciFi]);

// Rating per i film
$matrix->setRating(9);
$titanic->setRating(8.5);
$inception->setRating(9.2);

// var_dump($matrix);
// var_dump($titanic);
// var_dump($inception);
// var_dump($matrix->yearsSinceRelease());
// var_dump($titanic->yearsSinceRelease());
// var_dump($inception->yearsSinceRelease());

// Array dei film
$movies = [$matrix, $titanic, $inception];
