<?php
$admin = new Administrator();

$showusers = $admin->ShowUsers();
?>

<form action="" type="POST">
    <table>
        <tr><td>ID</td><td>Username</td><td>Mail</td><td>Level</td><td>Ban</td><td>Edit</td><td>Save</td></tr>
    <?php
    foreach($showusers as $user){
        echo '<tr><td>' .$user['id']. '</td><td>'.$user['username']. '</td><td>'.$user['email']. '</td><td>'.$user['level']. '</td><td><input type="submit" value="Ban" class="formButton"></td><td><input type="submit" value="Edit" class="formButton"></td><td><input type="Submit" value="Save" class="formButton"></td></tr>';

    }
    ?>
    </table>
</form>
