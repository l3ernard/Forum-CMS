<?php

if(!isset($_SESSION['login'])){


} else {
    include'include/admin.inc.php';

    $userManager = new UserManager();
    $cur_info = $userManager->user_info();

    $cur_username = $cur_info['username'];
    $cur_user_level = $cur_info['level'];

    if ($cur_user_level < 10) {
        echo 'Not authorized.';

    } else {

        ?>

        <div id="admin-panel">
            <div id="page-header">
                <div id="page-title">
                    <h1>Admin Panel</h1>
                </div>
                <div id="admin-menu">
                    <ul>
                        <li><a href="<?php echo $root; ?>admin">Overview</a></li>
                        <li><a href="<?php echo $root; ?>admin/edituser">Edit User</a></li>
                        <li><a href="<?php echo $root; ?>#">Customize style</a></li>
                    </ul>
                </div>
            </div>

            <div id="page-content">
                <?php
                if (!isset($_GET['a'])) {
                    include('admin/home.php');
                } else {

                    if (!file_exists("pages/admin/" . $_GET['a'] . ".php")) {
                        header("Location: admin/home");
                    } else {
                        include("pages/admin/" . $_GET['a'] . ".php");
                    }

                }
                ?>
            </div>
        </div>
        <?php
    }
}
    ?>
