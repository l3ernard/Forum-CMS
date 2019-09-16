<?php
$admin = new Administrator();

$showusers = $admin->ShowUsers();
?>


<form action="" type="POST">
    <table>
        <tr><td>ID</td><td>Username</td><td>Mail</td><td>Level</td><td>Ban</td><td>Edit</td></tr>
    <?php
    foreach($showusers as $user){
        echo '<tr><td><input type="text" name="userid" value="' .$user['id']. '"></p></td><td>'.$user['username']. '</td><td>'.$user['email']. '</td><td>'.$user['level']. '</td><td><input type="submit" value="Ban" class="formButton"></td></tr>';

    }
    ?>
    </table>
</form>


WORK IN PROGRESS