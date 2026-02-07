<?php

function get_all_sku($pdo)
{              
    $query = "SELECT SKU FROM termek_peldany;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_COLUMN);

    return $result;
}

function get_product_from_sku($pdo, $sku){
    $query = 'SELECT termek_peldany.meret, termek_peldany.ar, parfum_nev.nev FROM termek_peldany INNER JOIN parfum_nev ON termek_peldany.parfum_nev_id = parfum_nev.id WHERE termek_peldany.SKU = :sku;';

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":sku", $sku);
    $stmt->execute();

    // ez kapja vissza az eredmenyt, associative array formaban (oszlop neve, es ertek)
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

