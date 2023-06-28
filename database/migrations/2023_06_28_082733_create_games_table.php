<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_team');
            $table->unsignedBigInteger('away_team');
            $table->date('game_date');
            $table->time('game_time');
            $table->string('arena');
            $table->integer('score_home');
            $table->integer('away_home');
            $table->enum('game_status',['win', 'lose', 'comin', 'draw']);
            $table->timestamps();
            $table->foreign('home_team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('away_team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
