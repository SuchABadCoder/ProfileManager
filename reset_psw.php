<?php 
session_start();
require 'connect.php';

$password = md5($_POST['password']);
$new_psw = md5($_POST['new_password']);
$id = $_SESSION['user']['id']; 
$login = $_SESSION['user']['username'];

$expr = $dbh->prepare("SELECT * FROM `users` WHERE 
`login` = '$login' AND `password` = '$password'");
$expr->execute();
$users = $expr->fetchAll();

if ($expr->rowCount() > 0) {
    foreach ($users as $user) {
        $expr = $dbh->prepare("UPDATE `users` SET `password`='$new_psw' WHERE users.id='$id'");
        $expr->execute();
    }
    header('Location: profile.php');
}
else {
    $_SESSION['message'] = 'Wrong password!';
    header('Location: index.php');
}
?>