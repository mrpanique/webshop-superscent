<?php
declare(strict_types=1);

function is_input_empty($email, $telefon, $pwd, $pwd2){
    if(empty($email) || empty($telefon) || empty($pwd) || empty($pwd2)){
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

function is_email_registered($email, $pdo){
    if(get_email($email, $pdo)){
        return true;
    }
    else{
        return false;
    }
}

function do_passwords_mismatch($pwd, $pwd2){
    if($pwd != $pwd2){
        return true;
    }
    else{
        return false;
    }
}

function create_user($pdo, $email, $telefon, $pwd){
    set_user($pdo, $email, $telefon, $pwd);
}
