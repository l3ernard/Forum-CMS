<?php


if(!isset($_POST['submit'])) {

    ?>


<form action="" method="POST" >
    <table>
        <tr><td><input type="text" name="username" placeholder="username.." class="inputfields" min="4" max="64"></td></tr>
        <tr><td><input type="password" name="password" placeholder="password.." class="inputfields"  min="8" max="64"></td></tr>
        <tr><td><input type="email" name="email" placeholder="email.." class="inputfields"  min="4" max="255"></td></tr>
        <tr><td><input type="submit" name="submit" value="Submit" class="formButton" ></td></tr>

    </table>
</form>
<?php
}    else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $userManager = new UserManager();
    $userManager->insert_user($username, $password, $email);
}






