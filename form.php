<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="password.php">
        <input type="number" placeholder="inserisci la lunghezza della password" name="length">
        <div>
            <input type="radio" id="si" name="repeat" value=true checked />
            <label for="si">Sì</label>
        </div>

        <div>
            <input type="radio" id="no" name="repeat" value=false />
            <label for="no">No</label>
        </div>
        <input type="checkbox" id="letters" name="letters" value=true>
        <label for="vehicle1"> Lettere</label><br>
        <input type="checkbox" id="numbers" name="numbers" value=true>
        <label for="vehicle3"> Numeri</label><br>
        <input type="checkbox" id="symbols" name="symbols" value=true>
        <label for="vehicle3"> Simboli</label><br>
        <input type="submit" value="INVIA">
    </form>
</body>

</html>