<?php
$fManager = new ForumManager();

if(isset($_GET['t'])){
    $threadID = $_GET['t'];
    $getThreads = $fManager->getPosts($threadID);

}






?>