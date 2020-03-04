<?php 
function for_numbers($value = null){
    return(is_numeric($value)) ? true : false;
}

function format_for_numbers($value = null){
    return(preg_match("((^(\+)(\d){12}$)|(^\d{11}$))", $value)) ? true : false;
}
   
function valid_length($value = null){
    return(strlen($value) >= 2 && strlen($value) <= 4 ) ? true: false;
}

function must_not_start_num($value = null){
    $firstChar = substr($value, 0, 1);
    return(is_numeric($firstChar)) ? false : true;
}

function must_not_specialchar($value = null){
    $firstChar = substr($value, 0, 1);
    return(preg_match('/[^a-zA-Z\d]/', $firstChar)) ? false : true;
}
function must_not_html($value = null){
    return(preg_match('/<\s?[^\>]*\/?\s?>/i', $value)) ? false : true;
}

function correct_email($value = null){
    
    return(filter_var($value, FILTER_VALIDATE_EMAIL)) ? true : false;
}

function isEmpty($value = null){
    $cleanValue = trim($value);
    return(strlen($cleanValue) <= 0) ? true : false;
}