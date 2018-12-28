<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyOwnSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_own_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('contactinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->string('message');
        });

        Schema::create('myinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('skill_subject');
            $table->string('email');
            $table->string('address');           
            $table->string('phone_number');
            $table->string('overview');
            $table->string('photo_url');
        });

        Schema::create('myportfolio_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('image_url');
            $table->string('description');
        });

        Schema::create('service_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('image_url');
            $table->string('description');
        });

        Schema::create('myexperience', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('country');
            $table->string('role');
            $table->string('duration');
            $table->string('description');
        });

        Schema::create('myschool', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('country');
            $table->string('major');
            $table->string('duration');
            $table->string('description');
        });

        Schema::create('myskills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->float('percetage');
        });

        Schema::create('userlocationinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('city');
            $table->string('ipaddress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_own_sites');
    }
}
