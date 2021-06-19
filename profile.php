<?php
    session_start(); 
    require 'connect.php';
    require_once 'layout.php';
?>

<div class="row justify-content-center">
    <div class="wrap">
        <form>
            <img src="<?=$_SESSION['user']['photo'] ?>" width="100" alt="">
            <h1><?=$_SESSION['user']['username'] ?></h1>
            <h2><?=$_SESSION['user']['full_name'] ?></h2>
        </form>
    </div>
</div>
</body>
</html>