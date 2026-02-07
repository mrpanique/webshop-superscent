<?php

function email_kiir()
{
    $user_email = $_SESSION["user_email"];
    echo "$user_email";
}
function telefon_kiir()
{
    $user_telefon = $_SESSION["user_telefon"];
    echo "$user_telefon";
}
function adminButton()
{
    if ($_SESSION["user_id"] === 1) {
        echo '
            <a href="admin.php" class="btn btn-irany mt-5">Admin felület</a>
        ';
    }
}
