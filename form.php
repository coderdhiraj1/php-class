<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Field Form</title>
</head>
<body>

    <form action="" method="post">
        <!-- Name Field -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <!-- Email Field -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>

    <hr>
    <b>Form Output - POST <?= (count($_POST)) ? '- <a href="">Reset</a>' : '' ?> </b><br>
    <?php
    // to see the processing we kept sleep
    // sleep(2);
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    ?>


    <hr>
    <b>Form Output - GET <?= (count($_GET)) ? '- <a href="form.php">Reset</a>' : '' ?> </b><br>
    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>


    <hr>
    <b>Form Output - Using REQUEST Supergloabl <?= (count($_REQUEST)) ? '- <a href="form.php">Reset</a>' : '' ?> </b><br>
    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>
</body>
</html>