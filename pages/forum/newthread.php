<?php


if(!isset($_SESSION['login'])){


} else {
    if (!isset($_POST['submit'])) {
        ?>


        <form action="" method="POST">
            <table>
                <tr>
                    <td><input class="inputfields" type="text" name="title" placeholder="Title"></td>
                </tr>
                <tr>
                    <td><textarea class="textarea" name="content" placeholder="content"></textarea></td>
                </tr>
                <tr>
                    <td><input class="inputfields" type="text" name="tags" placeholder="tags, seperated by comma"></td>
                </tr>
                <tr>
                    <td><input class="formButton" type="submit" name="submit" value="Submit"></td>
                </tr>

            </table>

        </form>

        <?php
    } else {

        $fManager = new ForumManager();

        $title = $_POST['title'];
        $content = $_POST['content'];
        $tags = $_POST['tags'];
        $author = $_SESSION['userid'];
        $parent_cat = $_GET['c'];
        $fManager->PostThread($author, $title, $content, $tags, $parent_cat);
    }

}
?>