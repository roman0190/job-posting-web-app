<?php
include_once("../../controller/ManageJobs/editJobController.php");

?>


<html lang="en">

<head>
    <title>create new job</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
</head>



<body>
    <?php include_once("../components/header.php") ?>
    <main>



        <center>
            <h3>Edit Job</h3>
            <form method="POST" action="" enctype="">

                <table>
                    <input id="id" type="hidden" name="title" value="<?= $_GET['id'] ?>">
                    <tr>
                        <td><label for="title">title</label></td>
                        <td><input id="title" type="text" name="title" value="<?= $title ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="category">Category</label></td>
                        <td>
                            <select id="category" name="category">
                                <option>-</option>


                                <option value="software engineering" <?= $category == "software engineering" ? 'selected="selected"' : "" ?>>Software Engineering</option>
                                <option value="Data Science" <?= $category == "Data Science" ? 'selected="selected"' : "" ?>>Data Science</option>
                            </select>
                        </td>
                    </tr>






                    <tr>
                        <td><label for="subCategory">subCategory</label></td>
                        <td>

                            <select id="subCategory" name="subCategory">
                                <option>-</option>
                                <option value="front end engineering" <?= $subCategory == "front end engineering" ? 'selected="selected"' : "" ?>>front end engineer</option>
                                <option value="back end enginnering" <?= $subCategory == "back end enginnering" ? 'selected="selected"' : "" ?>>back end engineer</option>

                                <option value="machine learning engineering" <?= $subCategory == "machine learning engineer" ? 'selected="selected"' : "" ?>>machine learning engineer</option>
                                <option value="AI enginnering" <?= $subCategory == "AI enginnering" ? 'selected="selected"' : "" ?>>AI engineer</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="position">position</label></td>
                        <td><input id="position" type="text" name="position" value="<?= $position ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="skills">skills</label></td>
                        <td><input id="skills" type="text" name="skills" value="<?= $skills ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="education">education</label></td>
                        <td><input id="education" type="text" name="education" value="<?= $education ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="experience">experience (in years)</label></td>
                        <td><input id="experience" type="number" name="experience" value="<?= $experience ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="type">type</label></td>
                        <td>
                            <select name="type" id="type">
                                <option>-</option>
                                <option value="internship" <?= $type == "internship" ? 'selected="selected"' : "" ?>>internship</option>
                                <option value="part time" <?= $type == "part time" ? 'selected="selected"' : "" ?>>part time</option>
                                <option value="full time" <?= $type == "full time" ? 'selected="selected"' : "" ?>>full time</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="location">location</label></td>
                        <td><input id="location" type="text" name="location" value="<?= $location ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="description">description</label></td>
                        <td><input id="description" type="text" name="description" value="<?= $description ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="responsibilities">responsibilities</label></td>
                        <td><input id="responsibilities" type="text" name="responsibilities" value="<?= $responsibilities ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="tags">tags</label></td>
                        <td><input id="tags" type="text" name="tags" value="<?= $tags ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="deadline">deadline</label></td>
                        <td><input id="deadline" type="date" name="deadline" value="<?= $deadline ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p style="color:red;" id="error"><?= $error ?></p>
                        </td>
                    </tr>
                    <tr>

                        <td colspan="2"><input type="button" onclick="validateJob()" value="Edit" name="submit"></td>
                    </tr>

                </table>
            </form>
        </center>


    </main>
    <?php include_once("../components/footer.php") ?>
    <script src="../../assets/JS/ManageJobs/editJob.js"></script>
</body>

</html>