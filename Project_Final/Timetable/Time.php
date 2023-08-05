<!DOCTYPE html>
<html>
<head>
    <title>Class Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }

        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Class Schedule</h1>

    <?php
    $schedule = array(
        array("Monday", "Math", "Morsed Uddin", "Room 3106", "A", "Abdul Malek"),
        array("Tuesday", "English", "Kaniz Fatema", "Room 5102", "B", "Bipin Das"),
        array("Wednesday", "Programming", "Al Amin", "Room DNO102", "C", "Ismail Hossine"),
        array("Thursday", "Physics", "Abdul Motin", "Room 3102", "D", "Erena Haque"),
    );
    ?>

    <table>
        <tr>
            <th>Day</th>
            <th>Subject</th>
            <th>Teacher</th>
            <th>Room No</th>
            <th>Section Name</th>
            <th>Makeup Teacher</th>
        </tr>

        <?php foreach ($schedule as $class) { ?>
            <tr>
                <?php foreach ($class as $data) { ?>
                    <td><?php echo $data; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>

    <script>
        const scheduleData = <?php echo json_encode($schedule); ?>;
        const table = document.querySelector('table');

        if (Array.isArray(scheduleData) && scheduleData.length > 0) {
            for (const classData of scheduleData) {
                if (Array.isArray(classData) && classData.length === 6) {
                    const row = document.createElement('tr');
                    for (const data of classData) {
                        const cell = document.createElement('td');
                        cell.textContent = data;
                        row.appendChild(cell);
                    }
                    table.appendChild(row);
                } else {
                    showError("Invalid data format. Each class should have Day, Subject, Teacher, Room No, Section Name, and Teacher Name.");
                }
            }
        } else {
            showError("No class schedule data found.");
        }

        function showError(message) {
            const errorRow = document.createElement('tr');
            const errorCell = document.createElement('td');
            errorCell.setAttribute('colspan', '6');
            errorCell.classList.add('error');
            errorCell.textContent = message;
            errorRow.appendChild(errorCell);
            table.appendChild(errorRow);
        }
    </script>

<a href="login.html"> Back </a>

<a href="History.html"> click </a>

</body>
</html>