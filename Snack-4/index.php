<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Snack 4</title>
    </head>
    <body>

<?php
    $randArr = [];
    $i = 0;
    while ($i < 15) {
        $randArr[] = rand(1, 100);
        $i++;
    }
    var_dump($randArr);
?>


    </body>
</html>