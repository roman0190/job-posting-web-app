<?php
require_once('../model/db.php');
require_once('../model/model.php'); // Include the model functions

// Check if the user is an admin (you'll need to implement your own logic)
$isAdmin = checkIfUserIsAdmin();

if ($isAdmin) {
    // Admin is logged in, display edit and save buttons
    if (isset($_POST['edit_rule'])) {
        // Edit button clicked, display the edit form
        displayEditForm();
    } elseif (isset($_POST['save_changes'])) {
        // Save changes button clicked, update the rule in the database
        $ruleId = $_POST['rule_id'];
        $newRuleText = $_POST['new_rule_text'];
        updateRule($ruleId, $newRuleText);
        // Redirect or display a success message
    } else {
        // Display the rules with the edit button
        displayRules(true);
    }
} else {
    // Regular user is logged in, display rules without edit button
    displayRules(false);
}

?>
