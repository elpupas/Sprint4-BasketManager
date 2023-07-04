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
            $table->unsignedBigInteger('visitor_team');
            $table->date('game_date');
            $table->time('game_time');
            $table->string('stadium', 50);
            $table->integer('score_home')->nullable();
            $table->integer('score_visitor')->nullable();
            $table->enum('game_status',['win', 'lose', 'comin', 'draw']);
            $table->timestamps();
            $table->foreign('home_team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('visitor_team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
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
