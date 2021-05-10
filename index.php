<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>
</head>

<body>
    <?php
    class Movie
    {
        public $title;
        public $year;
        public $genres;
        public $director;
        public $nation;
        public $story;
        public $ageOfMovie;

        public function __construct($_title, $_year)
        {
            $this->title = $_title;
            $this->year = $_year;
        }
        public function setYear()
        {
            if (strftime("%Y") == $this->year) {
                $this->ageOfMovie = "Il film è attuale.";
            } else {
                $this->ageOfMovie = "Il film ha " . (intval(strftime("%Y")) - $this->year) . " anni.";
            }
        }
        public function getYear()
        {
            return $this->ageOfMovie;
        }
        public function printMovie()
        {
            echo "<h1>" . $this->title . "</h1>" . "<h3>Anno di produzione: " . $this->year . "</h3>";
            foreach ($this->genres as $genre) {
                echo $genre;
                if (next($this->genres)) {
                    echo ", ";
                }
            }
            echo "<h3>Regia di: </h3><h3 class='not_bold'>" . $this->director . "</h3><h3>Nazione di produzione: " . $this->nation . "</h3>";
            echo "<span class='bold'>Trama: </span><p>" . $this->story . "</p>";
            echo "<h3>" . $this->ageOfMovie . "</h3>";
        }
    }

    $ilGladiatore = new Movie("Il Gladiatore", 2000);
    $ilGladiatore->genres = ["azione", "avventura", "storico"];
    $ilGladiatore->director = "Ridley Scott";
    $ilGladiatore->nation = "Regno Unito";
    $ilGladiatore->story = "Il generale romano Massimo Decimo Meridio, comandante dell'esercito del Nord, ha condotto ancora una volta i suoi legionari alla vittoria, ed ora spera di poter tornare alla sua famiglia. Ma il sovrano Marco Aurelio, oramai vecchio e stanco, gli chiede di assumere il comando dell'impero dopo la sua morte.";
    $ilGladiatore->setYear();
    $ageOfMovie = $ilGladiatore->getYear();

    $forrestGump = new Movie("Forrest Gump", 1994);
    $forrestGump->genres = ["commedia", "drammatico"];
    $forrestGump->director = "Robert Zemeckis";
    $forrestGump->nation = "Stati Uniti";
    $forrestGump->story = "Seduto sulla panchina alla fermata dell'autobus di Savannah, Forrest Gump racconta con voce lenta della propria incredibile vita e dei problemi mentali e fisici che si porta dietro dalla nascita.";
    $forrestGump->setYear();
    $ageOfMovie = $forrestGump->getYear();
    
    ?>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .box {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            border: 3px solid lime;
            padding: 20px;
            background-color: lightgoldenrodyellow;
        }
        .bold {
            font-weight: 600;
        }
        .not_bold {
            font-weight: 300;
        }
    </style>
    <div class="movies">
        <div class="box">
            <?php $ilGladiatore->printMovie(); ?>
        </div>
        <div class="box">
            <?php $forrestGump->printMovie(); ?>
        </div>
    </div>
</body>

</html>