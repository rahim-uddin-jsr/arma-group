<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('iso_id');
            $table->string('hotline1');
            $table->string('hotline2');
            $table->string('company_name');
            $table->string('iso_logo');
            $table->string('address');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('footer_hotline1');
            $table->string('footer_hotline2');
            $table->string('footer_hotline3');
            $table->string('footer_hotline4');
            $table->string('email');
            $table->string('web');
            $table->string('map_url');
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
        Schema::dropIfExists('basic_infos');
    }
}
