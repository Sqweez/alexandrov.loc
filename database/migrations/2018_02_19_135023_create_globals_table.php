<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('globals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('vk_url');
            $table->string('ok_url');
	        $table->string('fb_url');
	        $table->string('phone_1');
	        $table->string('phone_2');
	        $table->string('IIN');
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
        Schema::dropIfExists('globals');
    }
}
