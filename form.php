<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
    <div class="container ">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-8 bg-secondary ">
                <h1 class="text-center mb-5">GENERATORE PASSWORD</h1>


                <form action="password.php" class="d-flex gap-3">
                    <div>
                        <div>inserisci la lunghezza della Password</div>
                        <input id="length" class="w-100" value="8" type="number" placeholder="lunghezza" name="length" min="8" max="50">
                    </div>
                    <div>
                        <div>Vuoi permettere la ripetizione dei caratteri?</div>
                        <div>
                            <input type="radio" id="si" name="repeat" value=true checked />
                            <label for="si">Sì</label>
                        </div>

                        <div>
                            <input type="radio" id="no" name="repeat" value=false />
                            <label for="no">No</label>
                        </div>
                    </div>
                    <div>
                        <div>Che caratteri vuoi includere?</div>
                        <input type="checkbox" id="letters" name="letters" value=true>
                        <label for="vehicle1"> Lettere</label><br>
                        <input type="checkbox" id="numbers" name="numbers" value=true>
                        <label for="vehicle3"> Numeri</label><br>
                        <input type="checkbox" id="symbols" name="symbols" value=true>
                        <label for="vehicle3"> Simboli</label><br>
                    </div>
                    <input type="submit" class="btn btn-primary d-flex align-items-center px-4" value="INVIA">
                </form>
            </div>
        </div>
    </div>
</body>

</html>