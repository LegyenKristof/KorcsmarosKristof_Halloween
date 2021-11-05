<?php

require "../vendor/autoload.php";

use Petrik14S\KorcsmarosKristof\Halloween\Models\Esemeny;
use Petrik14S\KorcsmarosKristof\Halloween\Models\Lako;

$lakok = [];
$esemenyek = [];

for ($i = 0; $i < 4; $i++){
    $lakok[] = new Lako("Lakó " . ($i + 1));
}

for ($i = 0; $i < 2; $i++){
    $resztvevok = [];
    for($j = 0; $j < 2; $j++){
        $resztvevok[] = $lakok[$i * 2 + $j];
    }
    $esemenyek[] = new Esemeny("Esemény " . ($i + 1), $lakok[$i], $resztvevok, new DateTime("2021-11-0$i 10:10:0$i"));
}

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
                
                echo "</ul>";
                echo "Időpont: " . $esemeny->getIdo()->format("Y-m-d H:i:s") . "<br>";
                echo "</li>";
            }
        ?>
    </ul>
</body>
</html>