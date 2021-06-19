<?php
    session_start(); 
    require_once 'layout.php';
    require 'connect.php';
?>
    <div class="row justify-content-center">
        <div class="wrap">
            <form action="signin.php" method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter your username">

                <label>Password</label> 
                <input type="password" name="password" placeholder="Enter your password">

                <button type="submit" class="btn btn-primary m-1">Submit</button>

                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </div>
</body>