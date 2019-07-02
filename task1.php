<form action="task1.php" method="post">
    <p>Кол-во строк: <input type="text" name="rows" ></p>
    <p>Кол-во столбцов: <input type="text" name="columns"></p>
    <input type="submit">
</form>

<?php
    if (isset($_POST['rows']) && isset($_POST['columns'])) {
        $rows = (int)$_POST['rows'];
        $columns = (int) $_POST['columns'];
        if ($rows == 0 || $columns == 0) {
            return;
        }

        $table = "<table border='1px solid black' style=\"border-collapse:collapse\">";

        $naming = 1;
        $table .= "<tr>";
        for ($i = 0; $i < $columns; $i++) {
            $table .= "<th>" . ($i+1) . "</th>";
        }
        $table .= "</tr>";

        for($j = 0; $j < $columns - 1; $j++) {
            $table .= "<tr>";
            for ($i = 0; $i < $columns; $i++, $naming++) {
                $table .= "<td>" . $naming . "</td>";
            }
            $table .= "</tr>";
        }

        $table .= "</table>";

        echo $table;
    }
?>

