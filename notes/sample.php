<?php

$user1 = ['id' => 1, 'name' => "Roman"];
$user2 = ['id' => 2, 'name' => "Roman 2"];
$users = [$user1, $user2];


function TR($id, $name)
{
    echo "<tr>
    <td>
    $id
    </td>
    <td>
    $name
    </td>
    </tr>";
}

?>
<html>

<table border='1'>

    <?php

    foreach ($users as $user) {
        TR($user['id'], $user['name']);
    }
    ?>

</table>

</html>