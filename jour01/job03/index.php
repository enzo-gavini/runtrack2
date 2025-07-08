<?php
    $integer = 42;
    $float = 3.14;
    $string = "Hello";
    $boolean = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>integer</td>
                <td>$integer</td>
                <td><?php echo $integer;?></td>
            </tr>
            <tr>
                <td>float</td>
                <td>$float</td>
                <td><?php echo $float;?></td>
            </tr>
            <tr>
                <td>string</td>
                <td>$string</td>
                <td><?php echo $string;?></td>
            </tr>
            <tr>
                <td>boolean</td>
                <td>$boolean</td>
                <td><?php echo $boolean;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
