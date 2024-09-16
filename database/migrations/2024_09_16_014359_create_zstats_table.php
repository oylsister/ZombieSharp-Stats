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
        if (!Schema::hasTable('zstats')) {
            Schema::create('zstats', function (Blueprint $table) {
                $table->string('name');
                $table->string('steam_auth')->primary();
                $table->integer('total_damage');
                $table->integer('total_kill');
                $table->integer('total_infect');
                $table->date('last_join');
                
                // Laravel need it somehow
                $table->date('created_at');
                $table->date('updated_at');
            });
        }
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zstats');
    }
};
