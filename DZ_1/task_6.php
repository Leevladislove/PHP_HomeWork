<?php

echo "<table>";

$res = 0;
for($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for($j = 1; $j <= 10; $j++) {
        $res = $i * $j;

        if($i % 2 == 0 && $j % 2 == 0) {
            echo "<td>($res)</td>";
        } elseif ($i % 2 == 1 && $j % 2 == 1) {
            echo "<td>[$res]</td>";
        } else {
            echo "<td>$res</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";

