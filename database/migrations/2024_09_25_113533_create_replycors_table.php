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
        Schema::create('replycors', function (Blueprint $table) {
            $table->id();
            $table->text('reply');
            $table->unsignedBigInteger('librarycor_id');
            $table->foreign('librarycor_id')->references('id')->on('librarycors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replycors');
    }
};
