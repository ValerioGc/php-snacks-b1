<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Snack 4</title>
    </head>
    <body>

        <?php
            $randArr = [];

            while (count($randArr) < 15) {
                $newN = rand(1, 100);
                if (!in_array($newN, $randArr)) {
                    $randArr[] = $newN;
                }
                else {
                    var_dump('numeri doppi = ' . $newN);
                }
            }
            var_dump($randArr);
        ?>

        <ul>
            <?php
                for ($i = 0; $i < count($randArr); $i++) {
                    echo '<li>' . $randArr[$i] . '</li>';
                }
            ?>
        </ul>


    </body>
</html>