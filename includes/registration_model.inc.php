<?php

function get_email($pdo, $email){
    $query = "SELECT email FROM felhasznalo WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    // ez kapja vissza az eredmenyt, associative array formaban (oszlop neve, es ertek)
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user($pdo, $email, $telefon, $pwd){
    $query = "INSERT INTO felhasznalo(email, jelszo, telefonszam) VALUES(:email, :pwd, :telefon);";
    $stmt = $pdo->prepare($query);
 
    $options = [
        'cost' => 12
    ];
    $hashed_pwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashed_pwd);
    $stmt->bindParam(":telefon", $telefon);
    $stmt->execute();
}
