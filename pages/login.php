<?php

if(!$_SESSION) {
    if (!isset($_POST['submit'])) {

        ?>


        <form action="" method="POST">
            <table>
                <tr>
                    <td><input type="text" name="username" placeholder="username.." class="inputfields" min="4"
                               max="64"></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="password.." class="inputfields" min="8"
                               max="64"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="remember"  class="checkbox"> Remember</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit" class="formButton"></td>
                </tr>

            </table>
        </form>
        <?php
    } else {
        $userManager = new UserManager();
        $login = $userManager->user_login($_POST['username'], $_POST['password'], $_POST['remember']);
        echo $login;

    }

} else {
    echo'already logged in';

    $userManager = new UserManager();
    $current_user = $userManager->user_info();
    echo $current_user['username'];
}




