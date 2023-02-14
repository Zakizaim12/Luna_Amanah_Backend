<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('image')->nullable();
            $table->string('nik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('asal_kota')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->string('radio')->nullable();
            $table->integer('harga_paket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
