<?php

$styleM = new styleManager();
$styles = $styleM->getStyles();





if(!isset($_POST['submit'])) {

    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Themes</td>
            </tr>
            <tr>
                <td><select name="style" class="inputfields">
                        <?php


                        foreach ($styles as $style) {
                            echo '<option value="' . $style['name'] . '">' . $style['name'] . '</option>';

                        }
                        ?>

                    </select></td>
            </tr>

        </table>

        <input type="submit" name="submit" value="Save" class="formButton">
    </form>
    <?php

} else {
    $style = $_POST['style'];


    $styleM->setStyle($style);
}