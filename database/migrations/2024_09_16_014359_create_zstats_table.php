<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('stats')) {
            Schema::create('stats', function (Blueprint $table) {
                $table->string('player_name');
                $table->string('steam_auth')->primary();
                $table->integer('total_dmg');
                $table->integer('total_kill');
                $table->integer('total_infect');
                $table->date('last_join');
            });
        }
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
