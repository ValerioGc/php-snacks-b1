<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Snack 4</title>
    </head>
    <body>
        <?php
            $students = [
                [
                    "nome" => "Mario",
                    "cognome" => "Rossi",
                    "mediaVoti" => 0,
                    "voti" => [
                        rand(2,10),
                        rand(2,10),
                        rand(2,10),
                        rand(2,10)
                    ]
                ],
                [
                    "nome" => "Luca",
                    "cognome" => "bianchi",
                    "mediaVoti" => 0,
                    "voti" => [
                        rand(2,10),
                        rand(2,10),
                        rand(2,10),
                        rand(2,10)
                    ]
                ],
                [
                    "nome" => "Alessio",
                    "cognome" => "Bianchi",
                    "mediaVoti" => 0,
                    "voti" => [
                        rand(2,10),
                        rand(2,10),
                        rand(2,10),
                        rand(2,10)
                    ]
                ],
                [
                    "nome" => "Matteo",
                    "cognome" => "Rossi",
                    "mediaVoti" => 0,
                    "voti" => [
                        rand(2,10),
                        rand(2,10),
                        rand(2,10),
                        rand(2,10)
                    ]
                ],
            ];

            for ($i = 0;$i < count($students); $i++) {
                  $voteC = 0;
                  for ($i = 0; $i < 4; $i++) {
                    $voteC += $students[$i]["voti"][$i];
                  }
                  $finalC = floor($voteC / 4);
                  $students[$i]["mediaVoti"] = $finalC ;
            }
        ?>

        <div>
            <?php
            for ($i = 0; $i < count($students); $i++) {
                echo '<div>';
                echo '<h1>Studente n. ' . ($i + 1) . '</h1>';
                    echo '<ul>';
                        echo '<li>' . $students[$i]["nome"] . '</li>';
                        echo '<li>' . $students[$i]["cognome"] . '</li>';
                        echo '<li>' . 'Media voti:' . ' '  . $students[$i]["mediaVoti"] . '</li>';
                    echo '</ul>';
                echo '</div>';
            }
    //        ?>
        </div>
    </body>
</html>