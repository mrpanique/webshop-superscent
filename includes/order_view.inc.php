<?php

function showFinal()
{
    echo $_SESSION['final'];
}

function showErrors()
{
    if (isset($_SESSION["errors_order"])) {
        $errors = $_SESSION["errors_order"];

        foreach ($errors as $error) {
            echo '<p class="form-error text-center fs-4">' . $error . '</p>';
        }

        unset($_SESSION['errors_order']);
    }
}


