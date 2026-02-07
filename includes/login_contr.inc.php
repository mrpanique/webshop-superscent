<?php

function is_input_empty($email, $pwd){
    if(empty($email) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}

function is_password_wrong($pwd, $hashed_pwd){
    if(!password_verify($pwd, $hashed_pwd)){   
        return true;
    }
    else{
        return false;
    }
}
