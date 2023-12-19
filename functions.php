<?php
function generaPass($alfabeto, $maiuscole, $numeri, $simboli)
{

    $password = [];
    $i = 0;
    do {
        $n = rand(0, 3);
        if ($n == 0 && isset($_GET["letters"]) && $_GET["letters"]) {
            $password[] = $alfabeto[rand(0, 25)];
            $i++;
        } else if ($n == 1 && isset($_GET["letters"]) && $_GET["letters"]) {
            $password[] = $maiuscole[rand(0, 25)];
            $i++;
        } else if ($n == 2 && isset($_GET["numbers"]) && $_GET["numbers"]) {
            $password[] = $numeri[rand(0, 9)];
            $i++;
        } else if ($n == 3 && isset($_GET["symbols"]) && $_GET["symbols"]) {
            $password[] = $simboli[rand(0, 9)];
            $i++;
        }
    } while ($i < $_GET["length"]);
    echo implode($password);
};
