<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'functions.php';
    $alphabet = range('a', 'z');
    $alphabetUpper = range('A', 'Z');
    $numbers = range(0, 9);
    $symbols = ["$", "%", "$", "/", "(", ")", "?", "!", "&", "^"];

    $password = generaPass($alphabet, $alphabetUpper, $numbers, $symbols);
    echo $password;
    var_dump($password);


    ?>
</body>

</html>