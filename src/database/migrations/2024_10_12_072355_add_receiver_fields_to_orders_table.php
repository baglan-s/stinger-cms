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
        Schema::table('orders', function (Blueprint $table) {
            $table->boolean('is_paid')->default(false);
            $table->boolean('has_receiver')->default(false);
            $table->string('receiver_name')->nullable();
            $table->string('receiver_lastname')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('comment')->nullable();
            $table->string('notification_method')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('is_paid');
            $table->dropColumn('has_receiver');
            $table->dropColumn('receiver_name');
            $table->dropColumn('receiver_lastname');
            $table->dropColumn('receiver_phone');
            $table->dropColumn('receiver_email');
            $table->dropColumn('comment');
            $table->dropColumn('notification_method');
        });
    }
};
