<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance</title>
    <link rel="stylesheet" href="page/assets/css/example.css">
</head>
<body>
    <h1>Attendance List</h1>

    <ul>
    <?php
    $students = ["Oyo", "JM", "Aldous", "Van", "Clar"];
    $i = 0;

    while ($i < count($students)) {
        $status = "Absent";

        if ($i % 2 == 0) {
            $status = "Present";
        }

        echo "<li>" . $students[$i] . " - $status</li>";
        $i++;
    }
    ?>
    </ul>

    <a href="page/index.php" class="button">View Schedule</a>
</body>
</html>
