<?php
    session_start();
    require 'connect.php';
    $id = $_GET['id'];
    $expr = $dbh->prepare("UPDATE users SET `role`='admin' WHERE users.id='$id'");
    $expr->execute();
?>
