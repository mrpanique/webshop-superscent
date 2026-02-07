<?php

// Ellenorzes hogy nem-e url alapjan tevedt valaki ide
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $pwd = $_POST["pwd"];
    $pwd2 = $_POST["pwd2"];

    try{
        require_once 'dbh.inc.php';
        require_once 'registration_model.inc.php';
        require_once 'registration_contr.inc.php';

        // Beirt adatok ellenorzese
        $errors = [];

        if (is_input_empty($email,$telefon,$pwd,$pwd2)){
            $errors["empty_input"] = "Töltsön ki minden mezőt!";
        }

        if (is_email_invalid($email)){
            $errors["invalid_email"] = "Érvénytelen email cím.";
        }

        if (is_telefon_invalid($telefon)){
            $errors["invalid_tel"] = "Érvénytelen telefonszám.";
        }

        if (is_email_registered($pdo, $email)){
            $errors["email_already_registered"] = "Ez az email már használatban van.";
        }

        if (do_passwords_mismatch($pwd, $pwd2)){
            $errors["passwords_mismatch"] = "A jelszavak nem egyeznek. ";
        }

        // Session inditasa
        require_once 'config_session.inc.php';

        // Hibak visszaadasa
        if($errors){
            $_SESSION['errors_registration'] = $errors;
            header("Location: ../registration.php");
            die();
        }

        // User letrehozasa
        create_user($pdo, $email, $telefon, $pwd);
        header("Location: ../index.php?registration=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch(PDOException $e) {
        header("Location: ../index.php?connection");
    }
}
else {
    header("Location: ../index.php?manipulated");
    die();
}

