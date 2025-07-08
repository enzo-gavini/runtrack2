<?php
    $name = "Jamie";
    $age = 10;
    $str3 = false;
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
                <td><?php var_dump ($str3);?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $age;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
