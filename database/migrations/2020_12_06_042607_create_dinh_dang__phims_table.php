<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinhDangPhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinhdang_phim', function (Blueprint $table) {
            $table->primary(['IDPhim', 'IDDinhDang']);
            $table->foreignId('IDPhim')->constrained('phim');
            $table->foreignId('IDDinhDang')->constrained('dinhdang');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dinhdang_phim');
    }
}
