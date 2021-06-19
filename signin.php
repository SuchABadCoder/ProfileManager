<?php 
session_start();
require 'connect.php';

$login = $_POST['username'];
$password = md5($_POST['password']);

$expr = $dbh->prepare("SELECT * FROM `users` WHERE 
`login` = '$login' AND `password` = '$password'");
$expr->execute();
$users = $expr->fetchAll();

if ($expr->rowCount() > 0) {
    foreach ($users as $user) {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "username" => $user['login'],
            "full_name" => $user['full_name'],
            "role" => $user['role'],
            "photo" =>$user['photo']
        ];
    }
    header('Location: profile.php');
}
else {
    $_SESSION['message'] = 'Wrong login or password!';
    header('Location: index.php');
}
?>