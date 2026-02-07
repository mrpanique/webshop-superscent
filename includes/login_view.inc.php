<?php

function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        foreach($errors as $error){
            echo '<p class="text-center form-error">' .$error. '</p>';
        }

        unset($_SESSION['errors_login']);
    }

    if(isset($_GET["login"])){
        echo '<p class="form-error">Kérjük előbb jelentkezzen be!</p>';
    }
    else if(isset($_GET["timed_out"])){
        echo '<p class="form-error">A munkamenet lejárt. Kérjük, jelentkezzen be újra.</p>'; 
    }

}


?>
