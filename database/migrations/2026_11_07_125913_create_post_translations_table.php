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
        Schema::create('post_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('locale')->index();
            $table->string('keywords')->nullable();
            $table->text('summery')->nullable();
            $table->text('describe1')->nullable();
            $table->text('describe2')->nullable();
            $table->text('describe3')->nullable();
            $table->text('describe4')->nullable();
            $table->string('sourceTitle')->nullable();
            $table->string('sourceDesc')->nullable();
            $table->string('aouther')->nullable();
            $table->unique(['post_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_translations');
    }
};
