
<?php
$fManager = new ForumManager();

if(isset($_GET['t'])){
    $threadID = $_GET['t'];
    $getPosts = $fManager->getPosts($threadID);
    $getThread = $fManager->getThread($threadID);


    foreach ($getThread as $thread){
        echo'<div class="forum-thread"><h2>' . $thread['title'] .  '</h2> '. $thread['content'] . '</div>';

    }


    foreach ($getPosts as $post) {
        echo'<div class="forum-post">' . $post['content'] . '</div>';

    }
}





?>
<table>
<form action="" method="POST">
    <tr><td><textarea class="textarea-comment" name="content" placeholder="Comment.."></textarea></td></tr>
    <tr><td><input type="submit" name="submit" value="Post" class="formButton"></td></tr>
</form>
</table>





