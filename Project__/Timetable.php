<!DOCTYPE html>
<html>
<head>
    <title>Class Schedule</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Class Schedule</h1>

    <?php
   
    $schedule = array(
        array("Monday", "Math", "Morsed Uddin", "Room 3106"),
        array("Tuesday", "English", "Kaniz Fatema", "Room 5102"),

array("wednesday", "programming", "Al Amin", "Room DNO102"),

array("Thursday", "physics", "Abdul Motin", "Room 3102"),
        
    );
    ?>

    <table>
        <tr>
            <th>Day</th>
            <th>Subject</th>
            <th>Teacher</th>
            <th>Room</th>
        </tr>

        <?php foreach ($schedule as $class) { ?>
            <tr>
                <?php foreach ($class as $data) { ?>
                    <td><?php echo $data; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>

 <a href="LOgin.html"> Back </a>


<a href="LOgin.html"> Back </a>

<a href="History.html"> click </a>
</body>
</html>