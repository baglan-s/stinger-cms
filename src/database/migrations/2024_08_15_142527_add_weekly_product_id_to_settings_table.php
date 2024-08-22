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
        Schema::table('settings', function (Blueprint $table) {
            $table->unsignedBigInteger('weekly_product_id')->nullable();
            $table->timestamp('weekly_product_starts_at')->nullable();
            $table->timestamp('weekly_product_ends_at')->nullable();

            $table->foreign('weekly_product_id')
                ->references('id')
                ->on('products')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('weekly_product_id');
            $table->dropColumn('weekly_product_starts_at');
            $table->dropColumn('weekly_product_ends_at');
        });
    }
};
