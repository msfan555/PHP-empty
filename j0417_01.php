gi<h3>九九乘法表</h3>
<style>
    table {
        border: 2px solid black;
        border-collapse: collapse;
    }

    tr,
    td {
        border: 1px solid black;
        text-align: center;
        padding: 5px 10px;
    }
</style>
<?php
echo "<table>";
for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo "<tr style=background-color:pink>";
    } else {
        echo "<tr>";
    }
    for ($j = 1; $j < 10; $j++) {
        echo "<td";
        if ($j % 2 == 0) {
            echo " style=background-color:beige";
        }
        echo ">";
        echo "{$j}x{$i}=" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>


<h3>交叉計算99乘法表</h3>
<?php
echo "<table>";
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
        if ($i == 0 && $j == 0) {
            echo "<td style = background-color:lightgray>";
            echo "&nbsp";
            echo "</td>";
        } else if ($i == 0) {
            echo "<td style = background-color:lightgray>$j</td>";
        } else if ($j == 0) {
            echo "<td style = background-color:lightgray>$i</td>";
        } else if ($i * $j == 0) {
        } else {
            echo "<td>";
            echo $i * $j;
            echo "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>