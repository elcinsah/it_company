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
        Schema::create('homelinks', function (Blueprint $table) {
            $table->id();
            $table->string('gift');
            $table->text('gift_description');
            $table->string('cashback');
            $table->string('link_home');
            $table->text('cashback_description');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homelinks');
    }
};
