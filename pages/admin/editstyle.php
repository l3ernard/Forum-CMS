<?php
if(!isset($_POST['submit'])){
$style = $_GET['style'];
$getstyle  = fopen("http://localhost/forum-cms/css/" . $style . ".css", "r") ;
?>

    <form  action="" method="POST">
        <table>

<?php
echo "<tr><td><textarea class='inputfields' name='newstyle'>" . fread($getstyle, 8192) . "</textarea></td></tr>";
echo "<tr><td>Filename: <input class='inputfields' type='text'value='" . $style ."'></td></tr>";
?>

            <tr> <td><input type="submit" value="Save" class="formButton"></td></tr>
        </table>
    </form>

<?php
} else {


}