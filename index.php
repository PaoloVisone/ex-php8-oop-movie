<?php

// Importo il Tait
require_once("./trait/hasRating.php");

// Importo il genere
require_once("./models/genre.php");

// Importo i film
require_once("./models/movie.php");

// importo il db
require_once("./models/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<div class="content">
    <div class="title">
        <h1>MOVIES</h1>
    </div>

    <div class="movie-card">
        <?php

        foreach ($movies as $movie) {
            // Ricavo generi 
            $generiNomi = array_map(fn($genere) => $genere->name, $movie->generi);
            $generiString = implode(", ", $generiNomi);

            echo "<div class='card'>
                      <div class='card-film'>  
                         <h2>{$movie->nome}</h2>
                         <p>Regista: {$movie->regista}</p>
                         <p>Durata: {$movie->durata}</p>
                         <p>Genere: {$generiString}</p>
                         <p>Anno: {$movie->data}</p>
                         <h3>{$movie->yearsSinceRelease()}</h3>
                         <span>Rating: <strong>{$movie->getRating()}</strong></span>
                      </div>
                   </div>";
        }

        ?>
    </div>
</div>

<body>

</body>

</html>