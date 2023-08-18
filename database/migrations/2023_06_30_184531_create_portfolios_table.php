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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('portfoliocategory_id');
            $table->string('image');
            $table->integer('ilkin_odenis')->nullable();
            $table->integer('ayliq_odenis')->nullable();
            $table->integer('kredit_muddeti')->nullable();

            $table->string('mehsul_haqqinda');
            $table->string('negd_qiymet');
            $table->string('kredit_qiymet')->nullable();
            $table->integer('satis_novu')->default(1);
            $table->string('title');
            $table->text('description');
            $table->integer('status')->default(1);

            $table->timestamps();
           $table->foreign('portfoliocategory_id')->references('id')->on('portfoliocategories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
