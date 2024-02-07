<?php

    //Funzione per generare la password casuale
    function passwordGenerator($lunghezza = 8) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
        $casualPassword = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $casualPassword .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $casualPassword;
    }
    
    // Cattura la lunghezza dalla richiesta GET e genera la password
    $passwordLength = '';

    if (isset($_GET['length'])) {
        $passwordLength = (int)$_GET['length'];
    }

    $generatedPassword = passwordGenerator($passwordLength);
    $viewPassword = isset($_GET['length']);

?>