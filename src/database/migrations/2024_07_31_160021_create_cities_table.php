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
        Schema::create('cities', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('price_type_id')->nullable();
            $table->integer('sort')->default(0);
            $table->boolean('active')->default(true);
            $table->uuid('guid')->nullable();
            $table->string('id_1c')->nullable();
            $table->string('kaspi_index')->nullable();
            $table->timestamps();

            $table->foreign('price_type_id')
                ->references('id')
                ->on('price_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
