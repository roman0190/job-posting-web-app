<?php
require_once('../model/userModel.php');
$users = getAllUser(); // Assuming getAllUser() returns an array of users
?>

<html>
<body>
<form action="chatCheck.php" method="post">
    <center>
        <h1>Chat</h1>
        <table border>
            <!-- Header row -->
            <tr>
                <th width="100">Senders</th>
                <th width="300" align="right">Messages With "RomanA"</th>
            </tr>
            
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><input type="button" value="<?php echo $user['name']; ?>"></td>
                    <td colspan="4" height="20">Messages</td>
            <?php } ?>
                </tr>
        </table>
        <table border>
        <tr >
                    <td width="406" align="right"><input type="text" name="text" value=""><input type="submit" name="send" value="Send"></td>
                </tr>
        </table>
</form>
    </center>
</body>
</html>
