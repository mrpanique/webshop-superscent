<?php

function getAddressId($pdo, $vez, $ker, $varos, $irsz, $utcahaz){
    $query = "SELECT id FROM cim WHERE vezeteknev = :vez AND keresztnev = :ker AND varos = :varos AND ir_szam = :irsz AND utca_hazszam = :utcahaz;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":vez", $vez);
    $stmt->bindParam(":ker", $ker);
    $stmt->bindParam(":varos", $varos);
    $stmt->bindParam(":irsz", $irsz);
    $stmt->bindParam(":utcahaz", $utcahaz);

    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_COLUMN);

    return $result; // 1 int
}

function setAddress($pdo, $vez, $ker, $varos, $irsz, $utcahaz){
    $query = 'INSERT INTO cim(vezeteknev, keresztnev, varos, ir_szam, utca_hazszam) VALUES(:vez, :ker, :varos, :irsz, :utcahaz);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":vez", $vez);
    $stmt->bindParam(":ker", $ker);
    $stmt->bindParam(":varos", $varos);
    $stmt->bindParam(":irsz", $irsz);
    $stmt->bindParam(":utcahaz", $utcahaz);

    $stmt->execute();

    return $pdo->lastInsertId();
}

function setOrder($pdo, $id, $user_id, $kontakt, $bill_id, $ship_id, $final){
    $query = 'INSERT INTO rendeles(id, felhasznalo_id, kontakt, szamlazasi_cim_id, szallitasi_cim_id, osszeg) VALUES(:id, :user_id, :kontakt, :bill_id, :ship_id, :final);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":kontakt", $kontakt);
    $stmt->bindParam(":bill_id", $bill_id);
    $stmt->bindParam(":ship_id", $ship_id);
    $stmt->bindParam(":final", $final);

    $stmt->execute();
}

function doesOrderIdExist($pdo, $id){
    $query = 'SELECT COUNT(*) FROM rendeles WHERE id = :id;';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $result = $stmt->fetchColumn();

    if( $result > 0){
        return true;
    }
    else{
        return false;   
    }
}

function setOrderedProduct($pdo, $order_id, $sku, $qty, $total){
    $query = 'INSERT INTO rendelt_termek(rendeles_id, SKU, mennyiseg, ar) VALUES(:order_id, :sku, :qty, :total);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":order_id", $order_id);
    $stmt->bindParam(":sku", $sku);
    $stmt->bindParam(":qty", $qty);
    $stmt->bindParam(":total", $total);
    $stmt->execute();
}

?>