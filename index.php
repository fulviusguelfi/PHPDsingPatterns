<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <body style="background: lemonchiffon">
        <pre>
            <?php
        require_once 'creational/singleton/SingletonImpl.php';
        class Teste extends SingletonImpl{}
        $ola = Teste::getInstance();
        var_dump($ola);
            echo 'Hello World!';
            ?>
        </pre>
    </body>
</html>
