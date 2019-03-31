<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkindiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skindiseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id');
            $table->string('disease_name');
            $table->string('symptom');
            $table->string('disease_diagnosis');
            $table->string('disease_image');
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
        Schema::drop('skindiseases');
    }
}
