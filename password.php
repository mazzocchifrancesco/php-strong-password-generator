<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $alphabet = range('a', 'z');
    $alphabetUpper = range('A', 'Z');
    $numbers = range(0, 9);
    $symbols = ["$", "%", "$", "/", "(", ")", "?", "!", "&", "^"];
    $password = [];
    $i = 0;
    do {
        $n = rand(0, 3);
        if ($n == 0 && isset($_GET["letters"]) && $_GET["letters"]) {
            $password[] = $alphabet[rand(0, 25)];
            $i++;
        } else if ($n == 1 && isset($_GET["letters"]) && $_GET["letters"]) {
            $password[] = $alphabetUpper[rand(0, 25)];
            $i++;
        } else if ($n == 2 && isset($_GET["numbers"]) && $_GET["numbers"]) {
            $password[] = $numbers[rand(0, 9)];
            $i++;
        } else if ($n == 3 && isset($_GET["symbols"]) && $_GET["symbols"]) {
            $password[] = $symbols[rand(0, 9)];
            $i++;
        }
    } while ($i < $_GET["length"]);
    echo implode($password);



    ?>
</body>

</html>