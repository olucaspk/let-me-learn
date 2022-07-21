<?php

session_start();

require_once('./_Database.php');

$databaseInstance = new Database();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header('location: ../../login.php');
    return;
}

$email = $_POST['email'];
$password = $_POST['password'];

handleLogin($email, $password);

function handleLogin($email, $password) {
    $databaseInstance = $GLOBALS['databaseInstance'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    
    $studentExists = $databaseInstance->Query('SELECT * FROM `students` WHERE `email` = :email', [
        'email' => $email
    ]);
    
    if (empty($studentExists)) {
        header('location: ../../login.php');
        return;
    }

    if (!password_verify($password, $studentExists[0]['password'])) {
        header('location: ../../login.php');
        return;
    }

    $_SESSION['login'] = [
        "studentId" => $studentExists[0]['id'],
        "email" => $email,
        "fullname" => $studentExists[0]['fullname']
    ];

    header("location: ../../dashboard.php");
}



// $passwordHash = password_hash($password, PASSWORD_DEFAULT);