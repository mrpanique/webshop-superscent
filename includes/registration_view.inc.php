<?php
declare(strict_types=1);

function check_registration_errors(){
    if(isset($_SESSION['errors_registration'])){
        $errors = $_SESSION['errors_registration'];

        foreach($errors as $error){
            echo '<p class="text-center form-error" >' . $error . '</p>';
        }

        unset($_SESSION['errors_registration']);
    }
}

?>