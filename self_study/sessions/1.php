<?php

session_start();
$_SESSION['username'] = 'student';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1sessions</title>
</head>
<body>
    <?php 
        if (!isset($_SESSION['username'])) {
            print('НЕ УСТАНОВЛЕНА');
        } else {
            print('Все гуд. Значение: '. $_SESSION['username']);
        }
        session_unset();
        // Завершение сессии
        session_destroy();
    ?>
</body>
</html>