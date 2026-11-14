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
        Schema::create('storie_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('storie_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unique(['storie_id','locale']);
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->text('desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storie_translations');
    }
};
