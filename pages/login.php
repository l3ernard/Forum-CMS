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
                    <td><input type="submit" name="submit" value="Submit" class="formButton"></td>
                </tr>

            </table>
        </form>
        <?php
    } else {
        $userManager = new UserManager();
        $userManager->user_login($_POST['username'], $_POST['password']);


    }

} else {
    echo'already logged in';

}




