<?php

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

        <div class="container">

            <header class="p-5">
                <h1 class="text-center text-uppercase text-primary">
                    Strong Password Generator
                </h1>
                
            </header>

            <main>
                <form class="row" action="index.php" method="get">
                    <div class="col-4">
                        <label class="form-label" for="length">Lunghezza Password:</label>
                        <input class="form-control" type="number" id="length" name="length" min="8" max="32" required>
                    </div>
                    <div class="col-3 align-self-end">
                        <button class="btn btn-primary" type="submit">Genera Password</button>
                    </div>
                </form>

                <div class="py-5">
                    <?php
                        if ($viewPassword) {
                            echo '<p>Password Generata: <strong class="text-primary fs-1 px-1">' . htmlspecialchars($generatedPassword) . '</strong></p>';
                        }
                    ?>
                </div>

            </main>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
    </body>
</html>