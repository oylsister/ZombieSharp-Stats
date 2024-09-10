<?php 

    require_once "database.php";

    $db = connect();

    $sql = "SELECT * From zsharp_stats";
    $query = $db->query($sql);
    $player_data = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 70%;
            justify-content: center;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>ZombieSharp Stats</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>SteamID</th>
            <th>Total Damage</th>
            <th>Total Kill</th>
            <th>Total Infect</th>
            <th>Last Join</th>
        </tr>
        <?php 
            $count = 0;

            foreach ($player_data as $data) :
                $count++;
        ?>
        <tr>
            <th>No.<?=$count?></th>
            <th><?=$data["player_name"]?></th>
            <th><?=$data["steam_auth"]?></th>
            <th><?=$data["total_dmg"]?></th>
            <th><?=$data["total_kill"]?></th>
            <th><?=$data["total_infect"]?></th>
            <th><?=$data["last_join"]?></th>
        </tr>
        <?php
            endforeach 
        ?>
    </table>
</body>
</html>