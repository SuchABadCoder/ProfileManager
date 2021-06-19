<?php
    session_start();
    require 'connect.php';
    $id = $_GET['id'];
    $expr = $dbh->prepare("UPDATE users SET `role`='user' WHERE users.id='$id'");
    $expr->execute();
?>