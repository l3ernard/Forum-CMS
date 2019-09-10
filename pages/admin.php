<div id="admin-panel">
    <h1>Admin Panel</h1>

    <div id="admin-menu">
        <ul>
        <li><a href="#">Post News</a></li>
        <li><a href="../admin/adduser">Add user</a></li>
        <li><a href="#">Customize style</a></li>

        </ul>
    </div>
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
