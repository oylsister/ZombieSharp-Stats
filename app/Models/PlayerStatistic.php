<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerStatistic extends Model
{
    use HasFactory;
    
    protected $table = 'zstats';
    
    protected $fillable = [
        'name',
        'steam_id',
        'total_damage',
        'total_kill',
        'total_infect',
        'last_join',
        'updated_at',
        'created_at'
    ];
}
