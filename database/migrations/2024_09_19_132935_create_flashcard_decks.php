<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flashcard_decks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deck_id');
            $table->unsignedBigInteger('flashcard_id');
            $table->foreign('deck_id')->references('id')->on('decks');
            $table->foreign('flashcard_id')->references('id')->on('flashcards');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flashcard_decks');
    }
};
