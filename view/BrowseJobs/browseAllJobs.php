<?php
include_once("../../controller/BrowseJobs/browseAllJobsController.php");

?>


<html>

<head>
    <title>All Jobs</title>
    <link rel="stylesheet" href="../../assets/CSS/Common/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <div class="filter-box">
        <form>


            <table>
                <tr>
                    <td><label for="search">Search</label></td>
                    <td colspan="3"><input style="width: 100%;" type="text" name="search" value="<?= $search ?>"></td>
                </tr>
                <tr>
                    <td><label for="category">category</label></td>
                    <td><select name="category">
                            <option value="">-</option>
                            <option value="software engineering" <?= $category == "software engineering" ? 'selected="selected"' : "" ?>>Software engineering</option>
                            <option value="data science" <?= $category == "data science" ? 'selected="selected"' : "" ?>>Data Science</option>
                        </select> </td>

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

                    <td><label for="$experience">experience (in years)</label></td>
                    <td><input type="number" name="experience" value="<?= $experience ?>"></td>

                    <td><label for="type">type</label></td>
                    <td>
                        <select name="type">
                            <option value="">-</option>
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

                    <td colspan="2"><input type="submit" value="Filter" name="submit"><input type="submit" value="Clear Filter" name="reset"></td>
                </tr>

            </table>


















        </form>
    </div>
    <div class="container">
        <?php
        foreach ($jobs as $job) {
            echo "
            <div class='card'  >
           <h4> {$job['title']}</h4>
           category: {$job['category']}   |   sub category:  {$job['sub_category']}<br>
           position: {$job['job_position']}   |   Application Deadline {$job['application_deadline']} 
           <br>
           <a href='jobDetails.php?id={$job['id']}'>See details</a>
            </div>";
        }
        ?>

    </div>
    <?php include_once("../components/footer.php") ?>
</body>

</html>