<?php

if(!isset($_SESSION['login'])){


} else {
    include'./include/admin.inc.php';

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
                    <h1>Dashboard</h1>
                </div>

            </div>
            <div id="admincontent">
                <?php
                if (!isset($_GET['fa'])) {
                    include('admin/home.php');
                } else {

                    if (!file_exists("pages/forum/admin/" . $_GET['fa'] . ".php")) {
                        header("Location: admin/forum/home");
                    } else {
                        include("pages/forum/admin/" . $_GET['fa'] . ".php");
                    }

                }
                ?>

            </div>
        </div>
        <?php
    }
}
?>
