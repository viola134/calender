<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tr, td {
    margin: auto;
    border: solid 1px black;
    border-collapse: collapse;
    }
    tr, td {
    font-size: 27px;
    }
    td:nth-child(7){
    background-color: red;
    }
    </style>
</head>
<body>
</body>
</html>
<?php
$today = date("l d F");
$dayw = date("l");
$dayWeek = date("w");
$daym = date("d");
$month = date("m");
$year = date("Y");
echo "<table>";
echo "<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>Sun</td></tr>";
$dayofweek = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
$count = 0;
for ($i = 1; $i <= count($dayofweek); $i++) {
    $firstday = date("w", mktime(0, 0, 0, $month, 1, $year));
    if ($count == 0) 
    echo "<tr>";
    if ($firstday == $i) {
        echo "<td>" . date("d", mktime(0, 0, 0, $month, 1, $year))."</td>";
        break;
    } else echo "<td></td>";
    $count++;
}
for ($i = 1; $i <= date("t"); $i++) {
    $dayofweek2 = date("d", mktime(0, 0, 0, $month, $i - 1, $year));
    if ($count == 0) 
    echo "<tr>";
    if ($dayofweek2 == $i - 1) 
    echo "<td>".date("d", mktime(0, 0, 0, $month, $i, $year))."</td>";
    $count++;
    if ($count == 7) 
    $count = 0;
    if ($count == 7) 
    echo "</tr>";
}
echo "</table>";