<?php

require "../vendor/autoload.php";

use Petrik14S\KorcsmarosKristof\Halloween\Models\Esemeny;
use Petrik14S\KorcsmarosKristof\Halloween\Models\Lako;

$lakok = [];
$esemenyek = [];

$lakok[] = new Lako("Béla");
$lakok[] = new Lako("Jani");
$lakok[] = new Lako("Károly");
$lakok[] = new Lako("Alexandra");

$esemenyek[] = new Esemeny("Halloween buli", $lakok[0], array($lakok[0], $lakok[1], $lakok[3]), new DateTime("2021-10-31 20:00:00"));
$esemenyek[] = new Esemeny("Fesztivál", $lakok[2], array($lakok[2], $lakok[0], $lakok[1], $lakok[3]), new DateTime("2021-10-30 10:00:00"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lakók:</h1>
    <ul>
        <?php
            foreach ($lakok as $lako){
                echo "<li>";
                echo $lako->getNev();
                echo "</li>";
            }
        ?>
    </ul>
    <h1>Esemémyek:</h1>
    <ul>
        <?php
            foreach ($esemenyek as $esemeny){
                echo "<li>";
                echo "Név: " . $esemeny->getNev() . "<br>";
                echo "Szervező: " . $esemeny->getSzervezo()->getNev() . "<br>";
                echo "Résztvevők: ";
                echo "<ul>";
                $resztvevok = $esemeny->getResztvevok();
                foreach($resztvevok as $resztvevo){
                    echo "<li>" . $resztvevo->getNev() . "</li>";
                }
                echo "</ul>";
                echo "Időpont: " . $esemeny->getIdo()->format("Y-m-d H:i:s") . "<br>";
                echo "</li>";
            }
        ?>
    </ul>
</body>
</html>