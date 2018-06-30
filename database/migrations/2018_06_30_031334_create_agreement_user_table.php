<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreement_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('agreement_id');
            $table->unsignedInteger('recipient_id');
            $table->foreign('agreement_id')->references('id')->on('agreements');
            $table->foreign('recipient_id')->references('id')->on('users');
            $table->string('signature')->unique();
            $table->unsignedInteger('status')->default('1');
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
        Schema::dropIfExists('agreement_user');
    }
}
