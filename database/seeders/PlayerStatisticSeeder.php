<?php

namespace Database\Seeders;

use App\Models\PlayerStatistic;
use Illuminate\Database\Seeder;

class PlayerStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            ['name' => 'Oylsister', 'steam_auth' => '[U:1:134972276]', 'total_damage' => 68423, 'total_kill' => 12, 'total_infect' => 43, 'last_join' => '2024-04-26'],
            ['name' => 'Dsd', 'steam_auth' => '[U:1:134972277]', 'total_damage' => 32143, 'total_kill' => 31, 'total_infect' => 12, 'last_join' => '2024-04-26'],
            ['name' => 'Pedro', 'steam_auth' => '[U:1:134972278]', 'total_damage' => 3232, 'total_kill' => 7, 'total_infect' => 315, 'last_join' => '2024-04-26'],
            ['name' => 'Poppy', 'steam_auth' => '[U:1:134972279]', 'total_damage' => 623, 'total_kill' => 20, 'total_infect' => 12, 'last_join' => '2024-04-26'],
            ['name' => 'xsh', 'steam_auth' => '[U:1:134972280]', 'total_damage' => 1464, 'total_kill' => 21, 'total_infect' => 23, 'last_join' => '2024-04-26'],
            ['name' => 'NJOOSHY', 'steam_auth' => '[U:1:134972281]', 'total_damage' => 12206, 'total_kill' => 969, 'total_infect' => 123, 'last_join' => '2024-04-26'],
            ['name' => 'RERs', 'steam_auth' => '[U:1:134972282]', 'total_damage' => 4521, 'total_kill' => 456, 'total_infect' => 10, 'last_join' => '2024-04-26'],
            ['name' => '+_+', 'steam_auth' => '[U:1:134972283]', 'total_damage' => 54612, 'total_kill' => 12, 'total_infect' => 22, 'last_join' => '2024-04-26'],
            ['name' => 'Magma', 'steam_auth' => '[U:1:134972284]', 'total_damage' => 21482, 'total_kill' => 31, 'total_infect' => 344, 'last_join' => '2024-04-26'],
            ['name' => 'kop', 'steam_auth' => '[U:1:134972285]', 'total_damage' => 12464, 'total_kill' => 456, 'total_infect' => 46, 'last_join' => '2024-04-26'],
            ['name' => 'inwza225', 'steam_auth' => '[U:1:134972286]', 'total_damage' => 21786, 'total_kill' => 12, 'total_infect' => 5, 'last_join' => '2024-04-26'],
            ['name' => 'lolipop', 'steam_auth' => '[U:1:134972287]', 'total_damage' => 4864, 'total_kill' => 13, 'total_infect' => 86, 'last_join' => '2024-04-26'],
            ['name' => 'tumdee', 'steam_auth' => '[U:1:134972288]', 'total_damage' => 6522, 'total_kill' => 213, 'total_infect' => 42, 'last_join' => '2024-04-26'],
            ['name' => 'Coser', 'steam_auth' => '[U:1:134972289]', 'total_damage' => 24641, 'total_kill' => 14, 'total_infect' => 5, 'last_join' => '2024-04-26'],
            ['name' => 'Doad', 'steam_auth' => '[U:1:134972290]', 'total_damage' => 23854, 'total_kill' => 67, 'total_infect' => 125, 'last_join' => '2024-04-26'],
        ];

        foreach ($players as $player) {
            PlayerStatistic::factory()->create($player);
        }
    }
}
