<?php
function generaPass($alfabeto, $maiuscole, $numeri, $simboli)
{
    $password = [];
    $usedCharacters = [];
    $i = 0;
    do {
        $n = rand(0, 3);
        if ($n == 0 && isset($_GET["letters"]) && $_GET["letters"]) {
            $char = $alfabeto[rand(0, count($alfabeto) - 1)];
            if (!in_array($char, $usedCharacters) || $_GET["repeat"] == 'true') {
                //se lascio solo il GET, aspettandomi quindi un valore true o false rimane sempre attivo. anche controllando un valore booleano
                $password[] = $char;
                $usedCharacters[] = $char;
                $i++;
            }
        } else if ($n == 1 && isset($_GET["letters"]) && $_GET["letters"]) {
            $char = $maiuscole[rand(0, count($maiuscole) - 1)];
            if (!in_array($char, $usedCharacters) || $_GET["repeat"] == 'true') {
                $password[] = $char;
                $usedCharacters[] = $char;
                $i++;
            }
        } else if ($n == 2 && isset($_GET["numbers"]) && $_GET["numbers"]) {
            $char = $numeri[rand(0, count($numeri) - 1)];
            if (!in_array($char, $usedCharacters) || $_GET["repeat"] == 'true') {
                $password[] = $char;
                $usedCharacters[] = $char;
                $i++;
            }
        } else if ($n == 3 && isset($_GET["symbols"]) && $_GET["symbols"]) {
            $char = $simboli[rand(0, count($simboli) - 1)];
            if (!in_array($char, $usedCharacters) || $_GET["repeat"] == 'true') {
                $password[] = $char;
                $usedCharacters[] = $char;
                $i++;
            }
        }
    } while ($i < $_GET["length"]);

    return implode($password);
}
