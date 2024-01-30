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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('public');
            $table->time('total_length');
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('CASCADE');
            $table->string('cover_path'); //TODO: generar caratulas mediante IA o subidas desde el usuario
            $table->enum('type',[
                'playlist',
                'album',
                'single',
                'EP'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
