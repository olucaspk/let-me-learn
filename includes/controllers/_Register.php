<?php

session_start();

require_once('./_Database.php');

$databaseInstance = new Database();

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    header('location: ../../register.php');
    return;
}

$fullname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

handleRegister($fullname, $email, $password);

function handleRegister($fullname, $email, $password) {
    $databaseInstance = $GLOBALS['databaseInstance'];

    $fullname = filter_var($fullname, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    
    $emailAlreadyRegistred = $databaseInstance->Query('SELECT `id` FROM `students` WHERE `email` = :email', [
        'email' => $email
    ]);

    if (!empty($emailAlreadyRegistred)) {
        header('location: ../../register.php');
        return;
    }

    $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);

    $databaseInstance->Query('INSERT INTO `students` (`email`, `fullname`, `password`) VALUES (:email, :fullname, :pass)',[
        'fullname' => $fullname,
        'pass' => $passwordEncrypted,
        'email' => $email,
    ]);

    $student = $databaseInstance->Query("SELECT `id` FROM `students` WHERE `email` = :email", [
        'email' =>  $email
    ]);

    if (empty($student)) {
        header('location: ../../register.php');
        return;
    }

    $_SESSION['login'] = [
        "studentId" => $student[0]['id'],
        "email" => $email,
        "fullname" => $fullname
    ];

    header("location: ../../dashboard.php");
}

?>