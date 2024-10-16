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
        Schema::create('search_hints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('setting_id');
            $table->text('search_word');
            $table->string('search_hint');
            $table->timestamps();

            $table->foreign('setting_id')
                ->references('id')
                ->on('settings')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_hints');
    }
};
