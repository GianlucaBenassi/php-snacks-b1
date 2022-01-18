<?php

    if (strlen($_GET['name']) > 3 && strpos($_GET['mail'], '@') && strpos($_GET['mail'], '.') && is_numeric($_GET['age'])) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }

?>