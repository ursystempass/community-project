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
        Schema::create('komenposts', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('events_id')->nullable();
            $table->text('konten');
            $table->dateTime('tgl_post');
            $table->timestamps();
            $table->foreign('events_id')->references('id')->on('events')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komenposts');
    }
};
