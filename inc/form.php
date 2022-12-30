<?php


$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {
//validate first name
    if(empty($firstName)){
        $errors['firstNameError'] = 'First Name empty';
//validate last name
    }if(empty($lastName)){
        $errors['lastNameError'] = 'Last Name empty';
//validate email
    }if(empty($email)){
        $errors['emailError'] = 'Email empty';
    }if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'Email Incorrect';
    }

////validate no errors

if(!array_filter($errors)){   
$firstName =    mysqli_real_escape_string($conn,$_POST['firstName']);
$lastName =     mysqli_real_escape_string($conn,$_POST['lastName']);
$email =        mysqli_real_escape_string($conn,$_POST['email']);

$sql = "INSERT INTO users(firstName, lastName, email)
VALUES ('$firstName', '$lastName', '$email')";

        //refresh page after sending data
    if(mysqli_query($conn, $sql)){
        header('Location:' . $_SERVER['PHP_SELF']);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    } 
}
}
?>