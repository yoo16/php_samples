<html>
<table>
    <?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            $answer = $i * $j;
            echo "<td>{$answer}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</html>