<?php
$title = "";
$category = "";
$subCategory = "";
$position = "";
$skills = "";
$education = "";
$experience = "";
$type = "";
$location = "";
$description = "";
$responsibilities = "";
$tags = "";
$deadline = "";


if (isset($_REQUEST['submit'])) {
    $title = $_REQUEST['title'];
    $category = $_REQUEST['category'];
    $subCategory = $_REQUEST['subCategory'];
    $position = $_REQUEST['position'];
    $skills = $_REQUEST['skills'];
    $education = $_REQUEST['education'];
    $experience = $_REQUEST['experience'];
    $type = $_REQUEST['type'];
    $location = $_REQUEST['location'];
    $description = $_REQUEST['description'];
    $responsibilities = $_REQUEST['responsibilities'];
    $tags = $_REQUEST['tags'];
    $deadline = $_REQUEST['deadline'];
}

?>


<html lang="en">

<head>
    <title>create new job</title>
</head>

<?php include_once("../components/style.php") ?>

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
                                <option value="software engineering" <?= (isset($_REQUEST['category']) && $_REQUEST['category'] == "software engineering") ? 'selected="selected"' : "" ?>>Software engineering</option>
                                <option value="data science" <?= (isset($_REQUEST['category']) && $_REQUEST['category'] == "data science") ? 'selected="selected"' : "" ?>>Data Science</option>
                            </select> </td>
                    </tr>





                    <tr>
                        <td><label for="subCategory">subCategory</label></td>
                        <td>

                            <select name="subCategory">
                                <option value="">-</option>
                                <?php
                                if (isset($_POST['category']) && $_POST['category'] === 'software engineering') {
                                    echo '<option value="frontend">Frontend</option>';
                                    echo '<option value="backend">Backend</option>';
                                } elseif (isset($_POST['category']) && $_POST['category'] === 'data science') {
                                    echo '<option value="machine learning">Machine Learning</option>';
                                    echo '<option value="data analysis">Data Analysis</option>';
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
                        <td><label for="$experience">experience</label></td>
                        <td><input type="text" name="experience" value="<?= $experience ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="type">type</label></td>
                        <td><input type="text" name="type" value="<?= $type ?>"></td>
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
                        <td><input type="text" name="deadline" value="<?= $deadline ?>"></td>
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