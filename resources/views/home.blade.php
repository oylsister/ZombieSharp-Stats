<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZombieSharp Statistic</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="header-container text-center mb-4">
        <h1 class="zsharp-header">ZombieSharp Stats</h1>
    </div>
    <div class="search-container mb-4">
        <form class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for player name or SteamID" name="search" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <div class="table-container">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Steam Auth</th>
                    <th>Total Damage</th>
                    <th>Total Kill</th>
                    <th>Total Infect</th>
                    <th>Last Join</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $index => $player)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->steam_auth }}</td>
                        <td>{{ $player->total_damage }}</td>
                        <td>{{ $player->total_kill }}</td>
                        <td>{{ $player->total_infect }}</td>
                        <td>{{ $player->last_join }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{ $players->links() }}
    </div>
</div>
</body>
</html>
