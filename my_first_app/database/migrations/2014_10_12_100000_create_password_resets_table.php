<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('Employee', function (Blueprint $table) {  
        $table->bigIncrements('id');  
        $table->string('first_name');  
              $table->string('last_name');  
              $table->string('gender');  
              $table->string('qualifications');  
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
        Schema::dropIfExists('Employee');
    }
};
