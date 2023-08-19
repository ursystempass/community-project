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
        Schema::create('event_historys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comment_post_id')->nullable();
            $table->string('description');
            $table->timestamps();
            $table->foreign('comment_post_id')->references('id')->on('comment_posts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_historys');
    }
};
