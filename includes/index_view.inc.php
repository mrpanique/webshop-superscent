<?php

function display_success_message(){
    if (isset($_GET["login"]) && $_GET["login"] === "success" ){                
        echo '<p class="form-success fs-3">Sikeres bejelentkezés.</p>'; 
    }
    else if(isset($_GET["registration"]) && $_GET["registration"] === "success" ){
        echo '<p class="form-success fs-3">Sikeres regisztráció.</p>';  
    }
    else if(isset($_GET["logout"]) && $_GET["logout"] === "success" ){
        echo '<p class="form-success fs-3">Sikeres kijelentkezés.</p>'; 
    }
    else if(isset($_GET['question']) && $_GET['question'] === "success"){
        echo '<p class="form-success fs-3">Kérdés sikeresen elküldve.</p>'; 
    }
    else if(isset($_GET["manipulated"])){
        echo '<p class="form-error fs-3">Hiba történt. Kérjük próbálja újra!</p>'; 
    }
    else if(isset($_GET["connection"])){
        echo '<p class="form-error fs-3">Csatlakozási hiba. Kérjük próbálja újra később!</p>'; 
    }
}
