-- Create Database.
CREATE TABLE IF NOT EXISTS zsharp_stats (
    player_name VARCHAR(64), 
    steam_auth VARCHAR(64) PRIMARY KEY,
    total_dmg INT,
    total_kill INT,
    total_infect INT,
    last_join DATE
);