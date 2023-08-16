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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->date('tgl_lahir');
            $table->string('whatsapp', 15);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat', 100);
            $table->string('provinsi', 100);
            $table->string('kabupaten', 100);
            $table->string('kecamatan', 100);
            $table->string('kodepos', 100);
            $table->text('KTP');
            $table->text('SIM');
            $table->text('STNK');
            $table->date('tgl_gabung');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
