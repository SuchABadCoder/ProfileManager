<?php
    session_start();
    require_once 'layout.php';
    require 'connect.php';
?>
<div class="row justify-content-center">
    <div class="wrap">
        <form action="reset_psw.php" method="post">
            <label>Old password</label> 
            <input type="password" name="password" placeholder="Enter your old password">

            <label>New password</label> 
            <input type="password" name="new_password" placeholder="Enter your new password">

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
</html>