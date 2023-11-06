<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rules and Regulations</title>
</head>
<body>
    <?php include_once("components/header.php") ?>

    <?php
    // Check if the user is an admin. You should replace this with your actual authentication logic.
    $user_type = "admin"; // Replace this with the actual type of the user

    if ($user_type === "admin") {
        // Handle form submission to save the edited rule
        if (isset($_POST['save_rule'])) {
            // Replace this with code to save the edited rule to your database
            $ruleId = $_POST['rule_id'];
            $editedRule = $_POST['edited_rule'];

            // Add your database update logic here
            // Example: $query = "UPDATE rules SET rule_text = '$editedRule' WHERE id = $ruleId";
            // Execute the query
        }
    ?>

    <h2>Rule 1:</h2>
    <p>
        <?php
        // Replace this with code to retrieve the rule text from your database
        $rule1Text = "This is the original Rule 1 text.";

        // Display the rule text
        echo $rule1Text;
        ?>
    </p>

    <form method="post">
        <input type="hidden" name="rule_id" value="1">
        <textarea name="edited_rule" rows="4" cols="50"></textarea>
        <input type="submit" name="save_rule" value="Edit Rule 1">
    </form>

    <h2>Rule 2:</h2>
    <p>
        <?php
        // Replace this with code to retrieve the rule text from your database
        $rule2Text = "This is the original Rule 2 text.";

        // Display the rule text
        echo $rule2Text;
        ?>
    </p>

    <form method="post">
        <input type="hidden" name="rule_id" value="2">
        <textarea name="edited_rule" rows="4" cols="50"></textarea>
        <input type="submit" name="save_rule" value="Edit Rule 2">
    </form>

    <h2>Rule 3:</h2>
    <p>
        <?php
        // Replace this with code to retrieve the rule text from your database
        $rule3Text = "This is the original Rule 3 text.";

        // Display the rule text
        echo $rule3Text;
        ?>
    </p>

    <form method="post">
        <input type="hidden" name="rule_id" value="2">
        <textarea name="edited_rule" rows="4" cols="50"></textarea>
        <input type="submit" name="save_rule" value="Edit Rule 3">
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
