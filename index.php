<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/main-page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <div class="header-container">
            <a class="header-link" href=""><h1 class="zsharp-header">ZombieSharp Stats</h1></a>
        </div>
        <div class="search-container">
            <form class="form-container" method="get">
                <input type="text" class="form-control" placeholder="Search for player" name="query" value="<?php echo isset($_GET['query']) ? $_GET['query'] : '' ?>">
                <button type="submit" class="btn btn-primary" id="search-btn" name="search-submit">Search</button>
            </form>
        </div>
        <div class="table-container">
            <table class="table table-bordered">
                <tr class="table-primary">
                    <th>No.</th>
                    <th>Name</th>
                    <th>SteamID</th>
                    <th>Total Damage</th>
                    <th>Total Kill</th>
                    <th>Total Infect</th>
                    <th>Last Join</th>
                </tr>
                <?php 
                    require_once "search.php";

                    $count = 0;
                    $name = isset($_GET['search-submit']) ? $_GET['query'] : '';
                    $player_data = getResultTable($name);

                    foreach ($player_data as $data) : 
                        $count++;
                ?>
                <tr>
                    <th><?=$count?></th>
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
        </div>
        <p style="text-align: center;">Total result found <?=getResultCount()?></p>
    </div>
</body>
</html>