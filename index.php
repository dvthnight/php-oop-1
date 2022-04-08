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
            } else {
                $this->anno = "dato non corretto";
            };
        }
    }

    $red_2 = new Movie("Red 2", ["Bruce Willis","John Malkovich","Catherine Zeta Jones"],"inglese","Dean Parisot","2013");
    // var_dump($red_2);

    $top_gun = new Movie("Top Gun",["Tom Cruise","Kelly McGillis","Anthony Edwards"],"inglese","Tony Scott","1986");
    // var_dump($top_gun);

    $creed = new Movie("Creed",["Michael B. Jordan","Sylvester Stallone","Sylvester Stallone"],"inglese","Ryan Coogler","2015");
    // var_dump($creed);

    $simpson = new Movie("I Simpson - Il film",["Homer","Marge","Bart","Lisa","Maggie"],"inglese","David Silverman","come mai");
    // var_dump($simpson);

    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>
    </head>
    <body>
        <h1>Lista film</h1>
        <ul>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                        <?php echo $red_2->titolo ?>
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            <?php foreach($red_2->attori as $attore){
                                ?>
                                <li>
                                    <?php echo $attore; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <h3>Lingua originale</h3>
                        <?php echo $red_2->lingua_originale ?>
                    </li>
                    <li>
                        <h3>Regista</h3>
                        <?php echo $red_2->regista ?>
                    </li>
                    <li>
                        <h3>Anno</h3>
                        <?php echo $red_2->anno ?>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                        <?php echo $top_gun->titolo ?>
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            <?php foreach($top_gun->attori as $attore){
                                ?>
                                <li>
                                    <?php echo $attore; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <li>
                        <h3>Lingua originale</h3>
                        <?php echo $top_gun->lingua_originale ?>
                    </li>
                    <li>
                        <h3>Regista</h3>
                        <?php echo $top_gun->regista ?>
                    </li>
                    <li>
                        <h3>Anno</h3>
                        <?php echo $top_gun->anno ?>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                        <?php echo $creed->titolo ?>
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            <?php foreach($creed->attori as $attore){
                                ?>
                                <li>
                                    <?php echo $attore; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <h3>Lingua originale</h3>
                        <?php echo $creed->lingua_originale ?>
                    </li>
                    <li>
                        <h3>Regista</h3>
                        <?php echo $creed->regista ?>
                    </li>
                    <li>
                        <h3>Anno</h3>
                        <?php echo $creed->anno ?>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                        <?php echo $simpson->titolo ?>
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            <?php foreach($simpson->attori as $attore){
                                ?>
                                <li>
                                    <?php echo $attore; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <h3>Lingua originale</h3>
                        <?php echo $simpson->lingua_originale ?>
                    </li>
                    <li>
                        <h3>Regista</h3>
                        <?php echo $simpson->regista ?>
                    </li>
                    <li>
                        <h3>Anno</h3>
                        <?php echo $simpson->anno ?>
                    </li>
                </ul>
            </li>
        </ul>
    </body>
    </html>

    
