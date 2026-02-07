<?php

function show_alerts(){
    if(isset($_GET["duplicate"])){
        echo '<p class="form-error mt-2">A termék már a kosárban van. A mennyiséget a kosárban tudja állítani.</p>';
    }
}