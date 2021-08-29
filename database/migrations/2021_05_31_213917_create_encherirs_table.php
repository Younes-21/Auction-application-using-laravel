<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncherirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encherirs', function (Blueprint $table) {
            $table->id();
            $table->double('prix_encherir');
            $table->date('date_encherir');
           // $table->foreign('id_enchereur')->references('id')->on('users');
           // $table->foreign('id_article')->references('id')->on('users');            
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
        Schema::dropIfExists('encherirs');
    }
}
