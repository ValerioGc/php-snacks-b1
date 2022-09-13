

<?php
    $name = trim($_GET['name']);
    $age = trim($_GET['age']);
    $email = trim($_GET['email']);
    $status = 'error';
    $status2 = 'error';
    $status3 = 'error';
    $accountInfo = [];




        if (is_string($name) && (strlen($name) > 3)) {
            $accountInfo['name'] = $name;
            var_dump($accountInfo['name']);
            $status = 'ok';
        }
        elseif (!is_string($name) || (strlen($name) <= 3)) {
            $accountInfo['name'] = 'errore';
        }

        if (is_numeric($age) && (strlen($age) != 0)) {
            $accountInfo['age'] = $age;
            $status2 = 'ok';

        }
        elseif (!is_numeric($age) || (strlen($age) == 0)) {
            $accountInfo['age'] = 'errore';
        }

        if (is_string($email) && (strlen($email) != 0)) {
               if ( (strpos($email, '@')) && (strpos($email, '.')) ) {
                    $accountInfo['email'] = $email;
                    $status3 = 'ok';

               }
               else {
                   $accountInfo['email'] = 'errore';
               }
        }


        var_dump($accountInfo);

        echo "<h1> . $accountInfo[name] . </h1>";
        echo "<h1> . $accountInfo[age] . </h1>";
        echo "<h1> . $accountInfo[email] . </h1>";
        echo "<br/>";
        echo "<br/>";

        if ((count($accountInfo) == 3)  && ($status == 'ok') && ($status2 == 'ok') && ($status3 == 'ok')){
            echo "<h1>Accesso Riuscito</h1>";
        }
        else {
            echo "<h1>Inserisci correttamente i dati</h1>";
        };

