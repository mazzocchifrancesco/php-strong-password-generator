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
    for ($i = 0; $i < $_GET["length"]; $i++) {
        $n = rand(0, 3);
        if ($n == 0) {
            $password[] = $alphabet[rand(0, 25)];
        } else if ($n == 1) {
            $password[] = $numbers[rand(0, 9)];
        } else if ($n == 2) {
            $password[] = $alphabetUpper[rand(0, 25)];
        } else if ($n == 3) {
            $password[] = $symbols[rand(0, 9)];
        }
    };
    echo implode($password);



    ?>
</body>

</html>