<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIdArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('encherirs', function (Blueprint $table) {
             $table->integer('id_article')->unsigned()->after('id_enchereur');
             $table->foreign('id_article')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('encherirs', function (Blueprint $table) {
            //
        });
    }
}
