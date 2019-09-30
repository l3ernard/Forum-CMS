
<table class="forumTable">
<?php
$fManager = new ForumManager();
$forums = $fManager->getForums();

foreach($forums as $forum){
    $categories = $fManager->getCategories($forum['id']);

    echo '<tr class="cat"><td>' . $forum['name'] . '</td></tr>';
        foreach($categories as $category){
            echo'<tr><td>' . $category['name'] .' </td></tr>';

        }
}




?>
</table>