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
        Schema::create('historys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('events_id')->nullable();
            // $table->unsignedBigInteger('pencapaians_id')->nullable();
            $table->string('description');
            $table->timestamps();

            // Foreign keys
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('events_id')->references('id')->on('events')->onDelete('set null');
            // $table->foreign('pencapaians_id')->references('id')->on('pencapaians')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historys');
    }
};
