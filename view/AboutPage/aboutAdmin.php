<?php

include_once('../../model/aboutModel.php');
include_once('../../controller/AboutPage/aboutAdminController.php');

?>



<html>
<center>

    <h1>About Us</h1>
    <p><?= $about ?></p>

    <form method="POST" action="" enctype="">
        <h4>Edit to update about page</h4>
        <textarea name="about" rows="20" name="about" value="<?= $about ?>"></textarea><br>
        <input type="submit" name="submit" value="submit" />
    </form>
</center>

</html>