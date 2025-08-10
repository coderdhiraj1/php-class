<?php
$db = mysqli_connect('localhost','root','root','mini_crud');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Five Field Form</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form action="code/insert.php" method="post">
        
        <!-- Name -->
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required>
        <br><br>

        <!-- Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        <!-- Mobile -->
        <label for="mobile">Mobile:</label><br>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="10-digit number" required>
        <br><br>

        <!-- Age -->
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="1" max="100" required>
        <br><br>

        <!-- Course Dropdown -->
        <label for="course">Select Course:</label><br>
        <select id="course" name="course" required>
            <option value="">-- Select Course --</option>
            <option value="php">PHP</option>
            <option value="python">Python</option>
            <option value="java">Java</option>
            <option value="javascript">JavaScript</option>
            <option value="c">C Language</option>
        </select>
        <br><br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>


        <hr>
            <b>Inserted Records</b><br>
                <?php
                $query = "SELECT * FROM students ORDER BY id DESC";
                $fire = mysqli_query($db, $query);
                ?>
                <table border="1" cellpadding="8" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Age</th>
                        <th>Course</th>
                        <th>Created At</th>
                    </tr>
                    <?php
                    if(mysqli_num_rows($fire)>0)
                    {
                        echo "<pre>";
                        while ($row = mysqli_fetch_assoc($fire))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?=  $row['name'] ?></td>
                                <td><?=  $row['email'] ?></td>
                                <td><?=  $row['mobile'] ?></td>
                                <td><?=  $row['age'] ?></td>
                                <td><?=  $row['course'] ?></td>
                                <td><?=  $row['created_at'] ?></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {

                    }
                    ?>
                    
                </table>
        <hr>

    </form>

</body>
</html>