<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIdEnchereur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('encherirs', function (Blueprint $table) {
            $table->integer('id_enchereur')->unsigned()->after('date_encherir');
            $table->foreign('id_enchereur')->references('id')->on('users');
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
            $table->dropForeign(['id_enchereur']);
            $table->dropColumn('id_enchereur');
        });
    }
}
