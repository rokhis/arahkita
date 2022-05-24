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
        Schema::create('user_pengelolas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('email');
            $table->String('password');
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
        Schema::dropIfExists('user_pengelolas');
    }
};
