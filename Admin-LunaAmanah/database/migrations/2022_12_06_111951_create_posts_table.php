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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('durasi_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('jadwal');
            $table->integer('total_seat');
            $table->text('berangkat_dari');
            $table->text('maskapai');
            $table->integer('solo');
            $table->integer('duo');
            $table->integer('triple');
            $table->integer('quad');
            $table->text('hari1');
            $table->text('hari2');
            $table->text('hari3');
            $table->text('hari4');
            $table->text('hari5');
            $table->text('hari6');
            $table->text('hari7');
            $table->text('hari8');
            $table->text('hari9');
            $table->text('hari10')->nullable();
            $table->text('hari11')->nullable();
            $table->text('hari12')->nullable();
            $table->text('hari13')->nullable();
            $table->text('hari14')->nullable();
            $table->text('hari15')->nullable();
            $table->text('hari16')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('body');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
