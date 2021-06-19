<?php
    session_start();
    require 'connect.php';
    $id = $_GET['id'];
    $expr = $dbh->prepare("DELETE FROM users WHERE users.id='$id'");
    $expr->execute();
?>