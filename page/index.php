<!DOCTYPE html>
<html>
<head>
    <title>Class Schedule</title>
    <link rel="stylesheet" href="assets/css/example.css">
</head>
<body>
    <h1>Weekly Class Schedule</h1>

    <?php
    $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    $i = 0;

    while ($i < count($days)) {
        $day = $days[$i];

        if ($day == "Saturday" || $day == "Sunday") {
            echo "<div class='weekend'>$day - No Class</div>";
        } else {
            echo "<div class='weekday'>$day - Class Day</div>";
        }

        $i++;
    }
    ?>

    <a href="../index.php" class="button">Back to Attendance</a>
</body>
</html>
