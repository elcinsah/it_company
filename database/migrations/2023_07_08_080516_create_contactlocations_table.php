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
        Schema::create('contactlocations', function (Blueprint $table) {
            $table->id();
            $table->string('map');
            $table->string('address_title');
            $table->string('email_title');
            $table->string('phone_title');
            $table->string('address');
            $table->string('email_icon');
            $table->string('phone_icon');
            $table->string('address_icon');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactlocations');
    }
};
