<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // associative array
    $arr1 = [
        '1' => 'ABC',
        '2' => 'DEF',
        '3' => 'GHI',
        '4' => 'JKL',
        '5' => 'MNO',
        '6' => 'PQR',
        '7' => 'STU',
        '8' => 'VWX',
        '9-----' => 'YZ',
        '10' => 'ZXY'
    ];

    // indexed array
    $arr2 = [
        'ABC',
        'DEF',
        'GHI',
        'JKL',
        'MNO',
        'PQR',
        'STU',
        'VWX',
        'YZ',
        'ZXY'
    ]
    ?>
    <!-- create a table with two columns sn, key, value -->
    <table border="1"> 
        <tr>
            <th>SN</th>
            <th>Key</th>
        </tr>
        <?php
        foreach($arr2 as $index => $each)
        {
            ?>
            <tr>
                <td><?= ++$index ?></td>
                <td><?= $each ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>