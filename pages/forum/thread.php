
<?php
$fManager = new ForumManager();

if(isset($_GET['t'])){
    $threadID = $_GET['t'];
    $getPosts = $fManager->getPosts($threadID);
    $getThread = $fManager->getThread($threadID);


    foreach ($getThread as $thread){
        echo'<div class="forum-thread"><h2>' . $thread['title'] .  '</h2> <p>'. $thread['content'] . '</p><div id="thread-info">' . $thread['tags'] . ' - ' . $thread['author'] . ' - ' . date("Y-m-d h:i:sa", $thread['creation_date']) . '</div></div>';

    }

    if (empty($getPosts)) {
        echo'No comments yet...';
    } else {
        foreach ($getPosts as $post) {
            echo'<div class="forum-post">' . $post['content'] . '</div>';

        }
    }
}




if(!isset($_POST['submit'])) {
    ?>
    <table>
        <form action="" method="POST">
            <tr>
                <td><textarea class="textarea-comment" name="content" placeholder="Comment.."></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Post" class="formButton"></td>
            </tr>
        </form>
    </table>
    <?php
} else {

    $author = $_SESSION['userid'];
    $content = $_POST['content'];
    $parent_thread = $threadID;

$post =  $fManager->PostComment($author, $parent_thread, $content);

}

    ?>




