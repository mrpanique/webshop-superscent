<?php

function showError(){
    if (isset($_GET['empty'])){
        echo '<p class="mt-2 fs-4 form-error text-center">Kérjük töltse ki a mezőt!</p>';
    }
}

