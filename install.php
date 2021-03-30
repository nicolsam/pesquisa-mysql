<?php
    require_once('config.php');

    try {
        $connection = new PDO('mysql:host=localhost', $username, $password);
        $sql = file_get_contents('data/init.sql');

        $connection->exec($sql);

    } catch(PDOExpection $err) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>