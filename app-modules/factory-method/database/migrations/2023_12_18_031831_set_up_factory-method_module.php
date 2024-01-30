<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SetUpFactoryMethodModule extends Migration
{
    public function up()
    {
        // Schema::create('factory-method', function(Blueprint $table) {
        // 	$table->bigIncrements('id');
        // 	$table->timestamps();
        // 	$table->softDeletes();
        // });
    }

    public function down()
    {
        // Schema::dropIfExists('factory-method');
    }
}
