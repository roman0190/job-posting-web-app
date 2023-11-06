<?php
include_once("../../controller/ManageJobs/editJobController.php");

?>


<html lang="en">

<head>
    <title>create new job</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>



<body>
    <?php include_once("../components/header.php") ?>
    <main>



        <center>
            <form method="POST" action="" enctype="">

                <table>
                    <tr>
                        <td><label for="title">title</label></td>
                        <td><input type="text" name="title" value="<?= $title ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="category">category</label></td>
                        <td><select name="category">
                                <option>-</option>
                                <option value="software engineering" <?= $category == "software engineering" ? 'selected="selected"' : "" ?>>Software engineering</option>
                                <option value="data science" <?= $category == "data science" ? 'selected="selected"' : "" ?>>Data Science</option>
                            </select> </td>
                    </tr>





                    <tr>
                        <td><label for="subCategory">subCategory</label></td>
                        <td>

                            <select name="subCategory">
                                <option value="">-</option>
                                <?php
                                if ($category === 'software engineering') {
                                    echo '<option value="front end engineering" >front end engineer</option>';
                                    echo '<option value="back end enginnering" >back end engineer</option>';
                                } elseif ($category === 'data science') {
                                    echo '<option value="machine learning engineering" >machine learning engineer</option>';
                                    echo '<option value="AI enginnering" >AI engineer</option>';
                                } else {
                                    echo '<option value="front end engineering" >front end engineer</option>';
                                    echo '<option value="back end enginnering" >back end engineer</option>';
                                    echo '<option value="machine learning engineering" >machine learning engineer</option>';
                                    echo '<option value="AI enginnering" >AI engineer</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="position">position</label></td>
                        <td><input type="text" name="position" value="<?= $position ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="skills">skills</label></td>
                        <td><input type="text" name="skills" value="<?= $skills ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="education">education</label></td>
                        <td><input type="text" name="education" value="<?= $education ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="$experience">experience (in years)</label></td>
                        <td><input type="number" name="experience" value="<?= $experience ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="type">type</label></td>
                        <td>
                            <select name="type">
                                <option>-</option>
                                <option value="internship" <?= $type == "internship" ? 'selected="selected"' : "" ?>>internship</option>
                                <option value="part time" <?= $type == "part time" ? 'selected="selected"' : "" ?>>part time</option>
                                <option value="full time" <?= $type == "full time" ? 'selected="selected"' : "" ?>>full time</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="location">location</label></td>
                        <td><input type="text" name="location" value="<?= $location ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="description">description</label></td>
                        <td><input type="text" name="description" value="<?= $description ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="responsibilities">responsibilities</label></td>
                        <td><input type="text" name="responsibilities" value="<?= $responsibilities ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="tags">tags</label></td>
                        <td><input type="text" name="tags" value="<?= $tags ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="deadline">deadline</label></td>
                        <td><input type="date" name="deadline" value="<?= $deadline ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p style="color:red;"><?= $error ?></p>
                        </td>
                    </tr>
                    <tr>

                        <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
                    </tr>

                </table>
            </form>
        </center>


    </main>
    <?php include_once("../components/footer.php") ?>
</body>

</html>