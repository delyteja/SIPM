<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Postingan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('namausaha');
            $table->string('kategori');
            $table->integer('biaya');
            $table->string('tempatusaha');
            $table->string('namafoto');
            $table->string('typefoto');
            $table->string('diskripsi');
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
        Schema::dropIfExists('postingans');
    }
}
