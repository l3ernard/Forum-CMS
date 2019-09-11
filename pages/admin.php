<div id="admin-panel">
    <div id="page-header">
        <div id="page-title">
            <h1>Admin Panel</h1>
        </div>
        <div id="admin-menu">
            <ul>
            <li><a href="<?php echo$root; ?>admin">Overview</a></li>
            <li><a href="<?php echo$root; ?>admin/adduser">Add user</a></li>
            <li><a href="<?php echo$root; ?>#">Customize style</a></li>
            </ul>
        </div>
    </div>

    <div id="page-content">
        <?php
        if(!isset($_GET['a'])){
            include('admin/home.php');
        } else {

            if(!file_exists("pages/admin/" . $_GET['a'] . ".php")){
                header("Location: admin/home");
            } else {
                include("pages/admin/" . $_GET['a'] . ".php");
            }

        }
        ?>
    </div>
</div>

