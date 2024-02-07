<?php

    //Funzione per generare la password casuale
    /*
    function passwordGenerator($passwordLength) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
        $casualPassword = '';
        for ($i = 0; $i < $passwordLength; $i++) {
            $casualPassword .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $casualPassword;
    }
    */

    function passwordGenerator($passwordLength, $includeNumbers, $includeLetters, $includeSymbols, $allowRepeats) {
        $characters = '';
        if ($includeLetters) {
            $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($includeNumbers) {
            $characters .= '0123456789';
        }
        if ($includeSymbols) {
            $characters .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
        }
    
        $casualPassword = '';
        $notDoubleCharacters = '';
    
        for ($i = 0; $i < $passwordLength; $i++) {
            $newCharacters = $characters[rand(0, strlen($characters) - 1)];
    
            if (!$allowRepeats) {
                while ($newCharacters == $notDoubleCharacters) {
                    $newCharacters = $characters[rand(0, strlen($characters) - 1)];
                }
            }
    
            $casualPassword .= $newCharacters;
            $notDoubleCharacters = $newCharacters;
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
        $includeNumbers = isset($_GET['numbers']);
        $includeLetters = isset($_GET['letters']);
        $includeSymbols = isset($_GET['symbols']);
        $allowRepeats = isset($_GET['repeats']);
        $generatedPassword = passwordGenerator($passwordLength, $includeNumbers, $includeLetters, $includeSymbols, $allowRepeats);
        
        //Salva la password generata nella sessione
        $_SESSION['generatedPassword'] = $generatedPassword;
        
        //Redirect alla pagina di visualizzazione
        header('Location: partials/password.php');

    }

?>