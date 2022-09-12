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
                    "voti" => [
                        rand(2,10),
                        rand(2,10),
                        rand(2,10),
                        rand(2,10)
                    ]
                ],
            ];

            for ($x = 0; $x < count($students); $x++) {
                $voteC = 0;
                  for ($i = 0; $i < count($students[$x]["voti"]); $i++) {
                    $voteC = $voteC + $students[$x]["voti"][$i];
                  }
                  $finalC = floor($voteC / 4);
                  $students[$x]["mediaVoti"] = $finalC ;
            }
        ?>

        <div>
            <?php
                for ($i = 0; $i < count($students); $i++) {
                    echo '<div>';
                    echo '<h1>Studente n. ' . ($i + 1) . '</h1>';
                        echo '<ul>';
                            echo '<li>' . '<b>' . 'Nome:' . '</b>' .' '  . $students[$i]["nome"] . '</li>';
                            echo '<li>' . '<b>' . 'Cognome:' . '</b>' . ' '  . $students[$i]["cognome"] . '</li>';
                            echo '<li>' . '<b>' . 'Media voti:' . '</b>' . ' '  . $students[$i]["mediaVoti"] . '</li>';
                        echo '</ul>';
                    echo '</div>';
                }
    //        ?>
        </div>
    </body>
</html>