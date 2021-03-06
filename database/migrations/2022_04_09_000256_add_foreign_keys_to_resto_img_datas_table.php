<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRestoImgDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resto_img_data', function (Blueprint $table) {
            $table->foreign(['id_resto'], 'resto_img_data_ibfk_1')->references(['id_resto'])->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resto_img_data', function (Blueprint $table) {
            $table->dropForeign('resto_img_data_ibfk_1');
        });
    }
}
