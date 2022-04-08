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
            $this-> setAnno($_anno);
        }


        public function setAnno($_anno){
            if(is_numeric($_anno)){
                $this->anno = $_anno;
            };
        }
    }

    $red_2 = new Movie("Red 2", ["Bruce Willis","John Malkovich","Catherine Zeta Jones"],"inglese","Dean Parisot","2013");
    var_dump($red_2);

    $top_gun = new Movie("Top Gun",["Tom Cruise","Kelly McGillis","Anthony Edwards"],"inglese","Tony Scott","1986");
    var_dump($top_gun);

    $creed = new Movie("Creed",["Michael B. Jordan","Sylvester Stallone","Sylvester Stallone"],"inglese","Ryan Coogler","2015");
    var_dump($creed);

    $simpson = new Movie("I Simpson - Il film",["Homer","Marge","Bart","Lisa","Maggie"],"inglese","David Silverman","come mai");
    var_dump($simpson);

    
