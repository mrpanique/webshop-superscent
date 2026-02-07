<?php

function is_bill_empty($vnev, $knev, $varos, $irsz, $utcahaz){
    if(empty($vnev) || empty($knev) || empty($varos) || empty($irsz) || empty($utcahaz)){
        return true;
    }
    else{
        return false;
    }
}

function is_ship_empty($vnev, $knev, $varos, $irsz, $utcahaz, $email, $tel){
    if(empty($vnev) || empty($knev) || empty($varos) || empty($irsz) || empty($utcahaz) || empty($email) || empty($tel)){
        return true;
    }
    else{
        return false;
    }
}

function is_email_invalid($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

function is_telefon_invalid($telefon){
    if(mb_strlen($telefon) < 5 || mb_strlen($telefon) > 20){
        return true;
    }
    else{
        return false;
    }
}

// max 5 karakter hossz. es csak szamot tartalmaz
function is_irsz_invalid($irsz){
    if(mb_strlen($irsz) > 5 || !ctype_digit($irsz)){
        return true;
    }
    else{
        return false;
    }
}
