<?php
    class Movie{
        public $titolo;
        public $attori;
        public $lingua_originale;
        public $regista;
        public $anno;

        function __construct($_titolo,$_attori,$_lingua_originale, $_regista, $_anno){
            $this->titolo = $_titolo;
            $this->attori = $_attori;
            $this->lingua_originale = $_lingua_originale;
            $this->regista = $_regista;
            $this->anno = $_anno;
        }
    }

    $red_2 = new Movie("Red 2", "Bruce Willis","inglese","Dean Parisot","2013");
    // $red_2->titolo = "Red 2";
    var_dump($red_2);
