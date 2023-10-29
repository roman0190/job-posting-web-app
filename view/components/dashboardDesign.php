<?php
    function dashboardHead($username)
    {
        $table = '
        <table>
            <tr>
                <td><img src="../img/logo.png" height="80" width="80"></td>
                <td width="700px" align="center"><h1>Dashboard</h1></td>
                <td width="200">
                    Login as ' . $username . '||<a href="../controller/logout.php">Logout</a>
                </td>
            </tr>
        </table>';

        return $table;
    }


    function createTable($rows, $columns, $cellValues) {
        $table = '<table>';
        for ($i = 0; $i < $rows; $i++) {
            $table .= '<tr>';
            for ($j = 0; $j < $columns; $j++) {
                $index = $i * $columns + $j;
                $value = isset($cellValues[$index]) ? $cellValues[$index] : ''; 
                $table .= "<td height='30px'>$value</td>";
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
        return $table;
    }

?>
