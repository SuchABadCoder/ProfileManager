<?php
    session_start();
    require 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        print_r($_FILES);
        $path = 'uploads/' . $_FILES['photo']['name'];
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
            $_SESSION['message'] = 'Failed to upload files';
            header('Location: register.php');
        }
        $password = md5($password);
        $expr = $dbh->prepare("INSERT INTO `users` 
        (`full_name`, `login`, `password`, `role`, `photo`)
        VALUES ('$full_name', '$login', '$password', 'user', '$path')");
        $expr->execute();
        $_SESSION['message'] = 'Registration complete';
        header('Location: index.php');
    }
    else {
        $_SESSION['message'] = 'Password not match';
        header('Location: register.php');
    }
?>