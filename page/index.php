<?php include_once "../utils/Example.utils.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance</title>
    <link rel="stylesheet" href="./assets/css/example.css">
</head>
<body>

<h2>📋 Employee Attendance</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Status</th>
        <th>Remarks</th>
    </tr>

<?php
for ($i = 0; $i < count($employees); $i++) {
    echo "<tr>";
    echo "<td>" . $employees[$i] . "</td>";
    echo "<td>" . $attendance[$i] . "</td>";

    // Conditionals
    if ($attendance[$i] == "Present") {
        echo "<td style='color: green;'>✔ On Time</td>";
    } else {
        echo "<td style='color: red;'>❌ Absent</td>";
    }

    echo "</tr>";
}
?>

</table>

<br>
<a href="summary.php">➡ View Summary</a>

</body>
</html>
