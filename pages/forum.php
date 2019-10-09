<?php
if (!isset($_GET['f'])) {
    include('forum/overview.php');
} else {

    if (!file_exists("pages/forum/" . $_GET['f'] . ".php")) {
        header("Location: forum/overview");
    } else {
        include("pages/forum/" . $_GET['f'] . ".php");
    }

}



