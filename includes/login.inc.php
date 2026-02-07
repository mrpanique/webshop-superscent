<?php

// Ellenorzes hogy nem-e url alapjan tevedt valaki ide
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try{
        require 'dbh.inc.php';
        require 'login_model.inc.php';
        require 'login_contr.inc.php';

        $errors = [];
        // Beirt adatok ellenorzese

        // Nem-e hagyott uresen mezot
        if (is_input_empty($email,$pwd)){
            $errors["empty_input"] = "Töltsön ki minden mezőt!";
        }

        $result = get_user($pdo, $email); // ha nincs ilyen user akk ures lesz a result

        if(!$result){
            // ha ures a result
            $errors["wrong_email"] = "Ez az email cím nem szerepel a rendszerünkben.";
        }
        else if(is_password_wrong($pwd, $result["jelszo"])){
            // ha nem ures a result de rossza jelszo
            $errors["wrong_password"] = "Hibás jelszó.";
        }

        // Session inditasa
        require_once 'config_session.inc.php';
        
        // Hibak visszaadasa
        if($errors){
            $_SESSION['errors_login'] = $errors;
            header("Location: ../login.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId); 

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_email"] = htmlspecialchars($result["email"]); 
        $_SESSION["user_telefon"] = $result["telefonszam"];

        $_SESSION['cart'] = array();
        $_SESSION['sku_qty'] = array();

        header("Location: ../index.php?login=success");

        $pdo = null;
        $statement = null;

        die();

    } catch(PDOException $e) {
        header("Location: ../index.php?connection");
    }
}
else {
    header("Location: ../index.php?manipulated");
    die();
}

?>