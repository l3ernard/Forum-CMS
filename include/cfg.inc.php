<?php
include 'include/DBConn.inc.php';
include 'include/user.inc.php';
include 'include/content.inc.php';
include 'include/style.inc.php';

$root = "http://localhost/3/forum-cms/";

$getStyle = new styleManager();

$style = $getStyle->getStyle();
session_start();




