<?php

function setQuestion($pdo, $question)
{
    $query = 'INSERT INTO kerdes(szoveg, felhasznalo_id) VALUES(:szoveg, :felhasznalo_id);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":szoveg", $question->text);
    $stmt->bindParam(":felhasznalo_id", $question->user_id);
    $stmt->execute();
}