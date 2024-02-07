<?php
    session_start();

    // Controlla se la password generata è stata salvata nella sessione
    if (isset($_SESSION['generatedPassword'])) {
        $generatedPassword = $_SESSION['generatedPassword'];
        // ALtrimenti ritorna all'index
    } else {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Generated Password</title>
    </head>
    <body class="bg-primary-subtle">

        <div class="container">
            <h1 class="text-center text-uppercase text-primary p-5">
                Password Generata:
             </h1>
        </div>
        
        <p class="text-center fs-1 fw-bold text-primary"><?= htmlspecialchars($generatedPassword) ?></p>
        <div class="text-center">
            <button class="btn btn-primary text-center"><a class="text-white text-decoration-none" href="../index.php">Genera una nuova Password!</a></button> 
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
    </body>
</html>