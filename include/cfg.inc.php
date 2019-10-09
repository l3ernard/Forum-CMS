<?php
include 'include/DBConn.inc.php';
include 'include/user.inc.php';
include 'include/content.inc.php';
include 'include/style.inc.php';
include 'include/forum.inc.php';

$root = "http://localhost/forum-cms/";

$getStyle = new styleManager();
$fManager = new ForumManager();
$style = $getStyle->getStyle();
session_start();




