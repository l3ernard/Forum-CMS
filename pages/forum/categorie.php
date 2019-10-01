<table class="forumTable">
    <tr><td>Threads</td><td>Author</td><td>Date</td></tr>
<?php
$fManager = new ForumManager();

if(isset($_GET['c'])){
    $catID = $_GET['c'];
    $getThreads = $fManager->getThreads($catID);


    foreach($getThreads as $thread){
        echo'<tr><td><a href="'. $root . 'forum/thread/' . $thread['id'] . '">' . $thread['title'] . '</a></td><td>' . $thread['author'] . '</td><td> ' . $thread['creation_date'] . ' </td></tr>';
    }
}

?>
    <tr><td><a href="#">Create thread</a></td><td></td><td></td></tr>
</table>






