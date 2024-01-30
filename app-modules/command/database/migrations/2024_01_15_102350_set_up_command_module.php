<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SetUpCommandModule extends Migration
{
    public function up()
    {
        // Schema::create('command', function(Blueprint $table) {
        // 	$table->bigIncrements('id');
        // 	$table->timestamps();
        // 	$table->softDeletes();
        // });
    }

    public function down()
    {
        // Schema::dropIfExists('command');
    }
}
