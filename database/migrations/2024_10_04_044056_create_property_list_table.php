<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyListTable extends Migration
{
    public function up()
    {
        Schema::create('property_list', function (Blueprint $table) {
            $table->id(); 
            $table->string('Title'); 
            $table->string('Description'); 
            $table->integer('Price'); 
            $table->string('Location'); 
          
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_list'); 
    }
}
