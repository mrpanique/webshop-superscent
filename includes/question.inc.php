<?php
require_once 'config_session.inc.php';
require_once 'classes/question_class.php';
require_once 'question_model.inc.php';

try {
    require_once 'dbh.inc.php';
} catch (Exception $e) {
    header("Location: ../index.php?manipulated");
    die();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php?manipulated");
    die();
}

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login.php?timed_out"); 
    die();
}

$q = new Question($_POST['question-text'], $_SESSION['user_id']);

if ($q->isTextEmpty()){
    header("Location: ../question.php?empty");
    die();
}

if (!$q->isTextInLimits()){
    header("Location: ../index.php?manipulated");
    die();
}

setQuestion($pdo, $q);

header('Location: ../index.php?question=success');
die();

