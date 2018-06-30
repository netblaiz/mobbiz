<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if(!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->string('identity');
            $table->integer('identity_type'); //1 is for BvN while 2 is for RC number
            $table->integer('status')->default(1);
            

            $table->rememberToken();
            $table->timestamps();
        });
}
      // Schema::table('users', function (Blueprint $table) {
            
            
            
        //});
   // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
