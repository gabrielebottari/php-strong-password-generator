<?php
    session_start();

    include __DIR__."/partials/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Strong Password Generator</title>
    </head>
    <body class="bg-primary-subtle">

        <div class="container py-5">

            <header class="p-5">
                <h1 class="text-center text-uppercase text-primary">
                    Strong Password Generator
                </h1>
                
            </header>

            <main>
                <form class="row justify-content-center" action="index.php" method="get">

                    <div class="col-2 text-center">
                        <label class="form-label text-primary" for="length">Lunghezza Password:</label>
                        <input class="form-control" type="number" id="length" name="length" min="8" max="32" required>
                    </div>

                    <div class="col-8 align-self-end text-center btn-group" role="group" required>

                        <input class="btn-check"  type="checkbox" id="numbers" name="numbers" checked autocomplete="off"> 
                        <label class="btn btn-outline-primary" for="numbers">Includi Numeri</label>
                        
                        <input class="btn-check" type="checkbox" id="letters" name="letters" checked autocomplete="on">
                        <label class="btn btn-outline-primary" for="letters">Includi Lettere</label>
                        
                        <input class="btn-check" type="checkbox" id="symbols" name="symbols" checked autocomplete="off">
                        <label class="btn btn-outline-primary" for="symbols">Includi Simboli</label>
                        
                        <input class="btn-check" type="checkbox" id="repeats" name="repeats" checked autocomplete="off">
                        <label class="btn btn-outline-primary" for="repeats">Permetti Ripetizioni</label>

                    </div>

                    <div class="col-2 align-self-end text-center d-flex flex-column">
                        <button class="btn btn-primary" type="submit">Genera Password</button>
                    </div>

                </form>
            </main>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
    </body>
</html>