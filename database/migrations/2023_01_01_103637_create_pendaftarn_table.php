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
        Schema::create('pendaftarn', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->enum('jenis_kelamin', ['perempuan', 'laki-laki']);
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('no');
            $table->integer('no_ayah');
            $table->integer('no_ibu');
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
        Schema::dropIfExists('pendaftarn');
    }
};
