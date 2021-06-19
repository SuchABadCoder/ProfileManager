<?php
    session_start();
    require 'connect.php';
    require_once 'layout.php';
    $expr = $dbh->prepare("SELECT * FROM `users`");
    $expr->execute();
    $users = $expr->fetchAll();
?>

<script src="ajax.js"></script>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Login</th>
            <th>Full name</th>
            <th>Role</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                <th><?=$user['login']?></th>
                <td><?=$user['full_name']?></td>
                    <?php $id = $user['id']; ?>
                    <?php if($user['role']=='user') {
                        $prmt = "Promote";
                    } 
                    else {
                        $prmt = "Demote";
                    }
                    ?>
                <td id="<?=$id . 'role'?>"><?=$user['role']?></td>
                <td style="color: white; text-decoration: none; cursor: pointer;" id="<?=$id?>" onclick="Promote(<?=$id?>)"><?=$prmt?></td>
                <td><a href="" style="color: white; text-decoration: none" onclick="Delete(<?=$id?>)">Delete</a></td>
                </tr>
            <?php endforeach ?>
</table>
</body>
</html>