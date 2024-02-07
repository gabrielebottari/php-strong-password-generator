<?php

    //Funzione per generare la password casuale
    function passwordGenerator($passwordLength) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
        $casualPassword = '';
        for ($i = 0; $i < $passwordLength; $i++) {
            $casualPassword .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $casualPassword;
    }
    
    /*
    $passwordLength = '';

    if (isset($_GET['length'])) {
        $passwordLength = (int)$_GET['length'];
    }

    $generatedPassword = passwordGenerator($passwordLength);
    $viewPassword = isset($_GET['length']);
    */

    if (isset($_GET['length'])) {
        $passwordLength = (int)$_GET['length'];
        $generatedPassword = passwordGenerator($passwordLength);
        
        //Salva la password generata nella sessione
        $_SESSION['generatedPassword'] = $generatedPassword;
        
        //Redirect alla pagina di visualizzazione
        header('Location: partials/password.php');
    }

?>