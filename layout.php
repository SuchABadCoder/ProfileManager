<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProfileManager</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Profile Manager</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo '<a class="nav-link" href="logout.php">Logout</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo '<a class="nav-link" href="register.php">Register</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']['role']=='admin') {
                            echo '<a class="nav-link" href="users.php">Users</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo '<a class="nav-link" href="index.php">Login</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo '<a class="nav-link" href="change_pass.php">Change</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>