<?php

// Trait 
trait HasRating
{
    // Proprietà
    private $rating;

    // Metodo per impostare il rating
    public function setRating($rating)
    {
        // Verifico se il rating è inferiore a 0 O maggiore di 10
        if ($rating < 0 || $rating > 10) {
            // Se la condizione è vera, lancia un'eccezione
            throw new Exception("Il rating deve essere compreso tra 0 e 10.");
        }
        // Se il controllo è superato, assegna il valore alla proprietà
        $this->rating = $rating;
    }

    // Metodo per ottenere il rating
    public function getRating()
    {
        // Messaggio d'errore se la proprietà non non sia stato ancora assegnato all'oggetto
        return $this->rating ?? "Nessun rating assegnato";
    }
}
