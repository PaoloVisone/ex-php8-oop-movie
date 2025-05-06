<?php

// Classe Movie
class Movie
{
    use HasRating;
    public $nome;
    public $regista;
    public $durata;
    public $data;
    public $generi;

    // Metodo
    function yearsSinceRelease()
    {
        $currentYear = date("Y"); // Ottiene l'anno corrente
        $yearsPassed = $currentYear - $this->data;

        if ($yearsPassed > 0) {
            return "Il film '{$this->nome}' è uscito {$yearsPassed} anni fa.";
        } else {
            return "Il film '{$this->nome}' è uscito quest'anno.";
        }
    }

    // Costruttore
    function __construct($nome, $regista, $durata, $data, $generi)
    {
        $this->nome = $nome;
        $this->regista = $regista;
        $this->durata = $durata;
        $this->data = $data;
        $this->generi = $generi;
    }
}
