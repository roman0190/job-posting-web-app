<?php
include_once("../../controller/ManageJobs/createNewJobCheck.php");

?>


<!DOCTYPE html>
<html>

<head>
    <title>Create job</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
    <link rel="stylesheet" href="../../assets/CSS/dashboard/dashboardApplicant.css" />
</head>

<body>
    <header class="header" id="header"></header>
    <main>


        <center>
            <h3>Create New Job</h3>
            <form method="POST" action="" enctype="">

                <table>
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
                                <option value="Web Development" <?= $category == "Web Development" ? 'selected="selected"' : "" ?>>Web Development</option>
                                <option value="Mobile App Development" <?= $category == "Mobile App Development" ? 'selected="selected"' : "" ?>>Mobile App Development</option>
                                <option value="UX/UI Design" <?= $category == "UX/UI Design" ? 'selected="selected"' : "" ?>>UX/UI Design</option>
                                <option value="Finance" <?= $category == "Finance" ? 'selected="selected"' : "" ?>>Finance</option>
                                <option value="Marketing" <?= $category == "Marketing" ? 'selected="selected"' : "" ?>>Marketing</option>
                                <option value="Healthcare" <?= $category == "Healthcare" ? 'selected="selected"' : "" ?>>Healthcare</option>
                                <option value="Education" <?= $category == "Education" ? 'selected="selected"' : "" ?>>Education</option>
                                <option value="Construction" <?= $category == "Construction" ? 'selected="selected"' : "" ?>>Construction</option>
                            </select>

                        </td>
                    </tr>






                    <tr>
                        <td><label for="subCategory">subCategory</label></td>
                        <td>

                            <select id="subCategory" name="subCategory">
                                <option>-</option>
                                <option value="Front End Development" <?= $subCategory == "Front End Development" ? 'selected="selected"' : "" ?>>Front End Development</option>
                                <option value="Back End Development" <?= $subCategory == "Back End Development" ? 'selected="selected"' : "" ?>>Back End Development</option>
                                <option value="Full Stack Development" <?= $subCategory == "Full Stack Development" ? 'selected="selected"' : "" ?>>Full Stack Development</option>
                                <option value="Software Testing" <?= $subCategory == "Software Testing" ? 'selected="selected"' : "" ?>>Software Testing</option>
                                <option value="DevOps" <?= $subCategory == "DevOps" ? 'selected="selected"' : "" ?>>DevOps</option>
                                <option value="UI/UX Design" <?= $subCategory == "UI/UX Design" ? 'selected="selected"' : "" ?>>UI/UX Design</option>
                                <option value="Mobile Development" <?= $subCategory == "Mobile Development" ? 'selected="selected"' : "" ?>>Mobile Development</option>
                                <option value="Data Mining" <?= $subCategory == "Data Mining" ? 'selected="selected"' : "" ?>>Data Mining</option>
                                <option value="Data Visualization" <?= $subCategory == "Data Visualization" ? 'selected="selected"' : "" ?>>Data Visualization</option>
                                <option value="Big Data Analysis" <?= $subCategory == "Big Data Analysis" ? 'selected="selected"' : "" ?>>Big Data Analysis</option>
                                <option value="Data Engineering" <?= $subCategory == "Data Engineering" ? 'selected="selected"' : "" ?>>Data Engineering</option>
                                <option value="Machine Learning Engineering" <?= $subCategory == "Machine Learning Engineering" ? 'selected="selected"' : "" ?>>Machine Learning Engineering</option>
                                <option value="Financial Planning" <?= $subCategory == "Financial Planning" ? 'selected="selected"' : "" ?>>Financial Planning</option>
                                <option value="Investment Banking" <?= $subCategory == "Investment Banking" ? 'selected="selected"' : "" ?>>Investment Banking</option>
                                <option value="Financial Risk Management" <?= $subCategory == "Financial Risk Management" ? 'selected="selected"' : "" ?>>Financial Risk Management</option>
                                <option value="Content Marketing" <?= $subCategory == "Content Marketing" ? 'selected="selected"' : "" ?>>Content Marketing</option>
                                <option value="Social Media Marketing" <?= $subCategory == "Social Media Marketing" ? 'selected="selected"' : "" ?>>Social Media Marketing</option>
                                <option value="Brand Management" <?= $subCategory == "Brand Management" ? 'selected="selected"' : "" ?>>Brand Management</option>
                                <option value="Pharmacy" <?= $subCategory == "Pharmacy" ? 'selected="selected"' : "" ?>>Pharmacy</option>
                                <option value="Medical Coding" <?= $subCategory == "Medical Coding" ? 'selected="selected"' : "" ?>>Medical Coding</option>
                                <option value="Healthcare Administration" <?= $subCategory == "Healthcare Administration" ? 'selected="selected"' : "" ?>>Healthcare Administration</option>
                                <option value="Teaching" <?= $subCategory == "Teaching" ? 'selected="selected"' : "" ?>>Teaching</option>
                                <option value="Education Administration" <?= $subCategory == "Education Administration" ? 'selected="selected"' : "" ?>>Education Administration</option>
                                <option value="Civil Engineering" <?= $subCategory == "Civil Engineering" ? 'selected="selected"' : "" ?>>Civil Engineering</option>
                                <option value="Architecture" <?= $subCategory == "Architecture" ? 'selected="selected"' : "" ?>>Architecture</option>
                                <option value="Construction Management" <?= $subCategory == "Construction Management" ? 'selected="selected"' : "" ?>>Construction Management</option>


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

                        <td colspan="2"><input type="button" onclick="validateJob()" value="Submit" name="submit"></td>
                    </tr>

                </table>
            </form>
        </center>



    </main>
    <script src="../../assets/JS/Header/generateHeader.js" type="module"></script>
    <script src="../../assets/JS/ManageJobs/createJob.js"></script>

</body>

</html>