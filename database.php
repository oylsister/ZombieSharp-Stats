<?php
    function connect()
    {
        $hostname = "localhost";
        $username = "oylsister";
        $password = "Xshot_555";
        $dbname = "zombie";
        
        $dsn = "mysql:host=$hostname;dbname=$dbname";

        try {
            return new PDO($dsn, $username, $password);
        } catch (Exception $error) {
            $error->getMessage();
        }
    }
?>