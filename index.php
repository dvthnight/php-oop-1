<?php
    class Movie{
        public $titolo;
        public $attori;
        public $lingua_originale;
        public $regista;
    }

    $red_2 = new Movie();
    $red_2->titolo = "Red 2";
    var_dump($red_2);
