<?php
include('include/style.inc.php');

$styleM = new styleManager();
$styles = $styleM->getStyles();





if(!isset($_POST)) {


    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Themes</td>
            </tr>
            <tr>
                <td><select class="inputfields">
                        <?php


                        foreach ($styles as $style) {
                            echo '<option value="' . $style['id'] . '">' . $style['name'] . '</option>';

                        }
                        ?>

                    </select></td>
            </tr>

        </table>

        <input type="submit" value="Save" class="formButton">
    </form>
    <?php

} else {

///////finishthis when u feel like it
}