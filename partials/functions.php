<?php
if (isset($_POST["email"])) { // se questa key esiste facciamo la richiesta
    $user_email = $_POST["email"];
    // var_dump($user_email);

    // controllo se nell'email sono presenti . @
    if (str_contains($user_email, "@") && str_contains($user_email, ".")) {
        $ok_email = "Email valida";
    } else {
        $error = "Error, non hai inserito i dati correttamente";
    };
};
?>