<!DOCTYPE html>
<html lang="en">
<head>
    <title>Terms Of Services</title>
</head>
<body>
    <?php include_once("components/header.php") ?>

    <?php
    // Check if the user is an admin. You should replace this with your actual authentication logic.
    $user_type = "admin"; // Replace this with the actual type of the user

    if ($user_type === "admin") {
        // Handle form submission to save the edited term
        if (isset($_POST['save_term'])) {
            // Replace this with code to save the edited term to your database
            $termId = $_POST['term_id'];
            $editedTerm = $_POST['edited_term'];

            // Add your database update logic here
            // Example: $query = "UPDATE terms SET term_text = '$editedterm' WHERE id = $termId";
            // Execute the query
        }
    ?>

    <h2>Terms of Services:</h2>
    <p>
        <?php
        // Replace this with code to retrieve the term text from your database
        $termText = "This is the original term text.";

        // Display the term text
        echo $termText;
        ?>
    </p>

    <form method="post">
        <textarea name="edited_term" rows="4" cols="50"></textarea>
        <input type="submit" name="save_term" value="Edit Term">
    </form>


    <?php
    } else {
        echo "<p>Access denied. This page is for admin only.</p>";
    }
    ?>

    <p><a href="dashboardAdmin.php">Back</a></p>

    <?php include_once("components/footer.php") ?>
</body>
</html>
