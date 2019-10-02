<table class="forumTable">
    <tr><td>Threads</td><td>Author</td><td>Date</td></tr>
<?php
$fManager = new ForumManager();

if(isset($_GET['c'])){
    $catID = $_GET['c'];
    $getThreads = $fManager->getThreads($catID);


    foreach($getThreads as $thread){
        echo'<tr><td><a href="'. $root . 'forum/thread/' . $thread['id'] . '">' . $thread['title'] . '</a></td><td>' . $thread['author'] . '</td><td> ' . date("Y-m-d h:i:sa",$thread['creation_date']) . ' </td></tr>';
    }


    ?>
    <tr><td><input type="button" onclick="location.href='<?php echo$root; ?>forum/newthread/<?php echo$catID; ?>';" value="New thread" class="formButton"></td><td></td><td></td></tr>
</table>

<?php
}

?>






