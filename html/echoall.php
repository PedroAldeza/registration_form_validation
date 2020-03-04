<?php

include_once("../validation.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $POB = $_POST['POB'];
    $gender = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $phone_number = $_POST['phone_number'];
    $civil_status = $_POST['civil_status'];
    $year_level = $_POST['year_level'];
    $course = $_POST['course'];
    $school_year = $_POST['school_year'];
    $email = $_POST['email'];
// $nameFerr = $firstname;
// if($_SERVER["REQUEST METHOD"] == "POST"){
//     if(empty($_POST["firstname"])){
//         $nameFerr = "First name is required";
//     }else {
//         $nameFerr = test_input($_POST["firstname"]);
//     }
// }
if(empty($firstname) && empty($lastname) && empty($middlename) && empty($address) && empty($POB) && empty($gender) && empty($guardian) && empty($phone_number) && empty($civil_status) && empty($school_year)){
    echo nl2br("\n you must input data\n");
}else{
    echo nl2br("\ngood to go\n");
}

if(for_numbers($phone_number) && format_for_numbers($phone_number)){
    echo nl2br("\nContact Number is Valid\n");
}
else{
    echo nl2br("\nERROR found in contact input!!\n");
}

if(must_not_start_num($firstname) && must_not_start_num($lastname) && must_not_start_num($middlename) && must_not_start_num($guardian) && must_not_start_num($civil_status)  && must_not_start_num($email)){
    echo nl2br("\nall text was not starting with a number SUCCESS\n");
}
else{
    echo nl2br("\nShould not start with a number\n");
}

if(must_not_specialchar($firstname) && must_not_specialchar($lastname) && must_not_specialchar($middlename) && must_not_specialchar($guardian) && must_not_specialchar($civil_status)){
    echo nl2br("\nInputs are all VALID\n");
}
else{
    echo nl2br("\nERROR! must not start with SPECIAL CHARACTERS\n");
}

if (must_not_html($firstname) && must_not_html($lastname) && must_not_html($middlename) &&
must_not_html($guardian) && must_not_html($phone_number) && must_not_html($civil_status) && must_not_html($school_year) && must_not_html($email)){
    echo nl2br("\nVALID inputs, (no html tags)\n");
}
else{
    echo nl2br("\nERROR! must not start with HTML tags\n");
}

if(correct_email($email)){
    echo nl2br("\n$email VALID inputs\n");
}
else{
    echo nl2br("\n$email ERROR! invalid inputs!\n");
}

if(isset($gender) && $gender == "female"){
    echo nl2br("\nCHECKED FEMALE\n");
}else{
    echo nl2br("\nNO GENDER ASSIGNED\n");
}
if(isset($gender) && $gender == "male"){
    echo nl2br("\nCHECKED MALE\n");
}else{
    echo nl2br("\nNO GENDER ASSIGNED\n");
}
if(isset($gender) && $gender == "other"){
    echo nl2br("\nCHECKED OTHER\n");
}else{
    echo nl2br("\nNO GENDER ASSIGNED\n");
}
if($gender != NULL){
    echo nl2br("\ngender is saved");
}else {
    echo nl2br("\n gender must be picked\n");
}







