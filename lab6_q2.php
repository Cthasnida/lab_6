<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>

    <h3>Students Information</h3>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>

        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>