

<?php
    $name = trim($_GET['name']);
    $age = trim($_GET['age']);
    $email = trim($_GET['email']);
    $accountInfo = [];




        if (is_string($name) && (strlen($name) > 3)) {
            $accountInfo['name'] = $name;
            var_dump($accountInfo['name']);
        }
        elseif (!is_string($name) || (strlen($name) <= 3)) {
            $accountInfo['name'] = 'formato nome sbagliato';
        }

        if (is_numeric($age) && (strlen($age) != 0)) {
            $accountInfo['age'] = $age;
        }
        elseif (!is_numeric($age) || (strlen($age) == 0)) {
            $accountInfo['age'] = 'formato età sbagliato';
        }

        if (is_string($email) && (strlen($email) != 0)) {
               if ( (strpos($email, '@')) && (strpos($email, '.')) ) {
                    $accountInfo['email'] = $email;
               }
               else {
                   $accountInfo['email'] = 'formato email sbagliato';
               }
        }


        var_dump($accountInfo);

        echo "<h1> . $accountInfo[name] . </h1>";
        echo "<h1> . $accountInfo[age] . </h1>";
        echo "<h1> . $accountInfo[email] . </h1>";
        echo "<br/>";
        echo "<br/>";

        if (count($accountInfo) < 3) {
            echo "<h1>Inserisci correttamente i dati</h1>";
        }
        else {
            echo "<h1>Accesso Riuscito</h1>";
        };

