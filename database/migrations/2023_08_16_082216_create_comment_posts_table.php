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
        Schema::create('comment_posts', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('event_id')->nullable();
            $table->text('content');
            $table->dateTime('date_post');
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_posts');
    }
};
