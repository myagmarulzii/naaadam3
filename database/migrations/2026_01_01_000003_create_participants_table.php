<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('sport_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('title');
            $table->unsignedInteger('rank');
            $table->enum('medal', ['gold', 'silver', 'bronze']);
            $table->unsignedInteger('wins')->nullable();
            $table->decimal('score', 8, 2)->nullable();
            $table->string('finish_time', 50)->nullable();
            $table->string('hometown')->nullable();
            $table->text('bio')->nullable();
            $table->string('photo_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
