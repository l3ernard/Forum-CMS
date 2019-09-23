<div id="simpleGrid">
    <?php

$styleM = new styleManager();
$styles = $styleM->getStyles();





if(!isset($_POST['submit'])) {

    ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Choose Theme</td>
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






if(!isset($_POST['customize'])) {
    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Customize Theme</td>
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

        <input type="submit" name="customize" value="Customize" class="formButton">
    </form>
</div>
<?php
} else {
    $C_style = $_POST['style'];
    header("Location: " . $root . "admin/editstyle/" . $C_style);

}




