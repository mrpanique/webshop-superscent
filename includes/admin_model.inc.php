<?php
function getOrders($pdo)
{
    $query = 'SELECT * FROM rendeles ORDER BY datum DESC;';

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getAddressFromId($pdo, $id)
{
    $query = 'SELECT * FROM cim WHERE id = :id;';

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getOrderedProducts($pdo, $order_id)
{
    $query = "SELECT SKU, mennyiseg, ar FROM rendelt_termek WHERE rendeles_id = :order_id;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":order_id", $order_id);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getQuestions($pdo)
{
    $query = 'SELECT * FROM kerdes ORDER BY datum DESC;';

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $questions = [];
    foreach ($result as $assoc) {
        $question = new Question($assoc['szoveg'], $assoc['felhasznalo_id']);
        $question->setDate($assoc['datum']);
        array_push($questions, $question);
    }
    return $questions;
}

function getEmailFromId($pdo, $id)
{
    $query = 'SELECT email FROM felhasznalo WHERE id = :id;';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $email = $stmt->fetchColumn();
    return $email;

}
