<!-- LAB 5A AFIQAH AZHAR QUESTION 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php  
        // Define associative array of students
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
            ],
        ];
    ?> 

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php 
            foreach ($students as $student) {
                echo "<tr>
                        <td>{$student['name']}</td>
                        <td>{$student['program']}</td>
                        <td>{$student['age']}</td>
                      </tr>";
            }
        ?>
    </table>
</body>
</html>