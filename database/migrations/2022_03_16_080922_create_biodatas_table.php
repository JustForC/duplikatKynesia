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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('nickname');
            $table->string('gender');
            $table->string('birthplace');
            $table->string('birthdate');
            $table->string('telephone');
            $table->string('email');
            $table->string('idType');
            $table->string('idNumber');
            $table->longText('address');
            $table->string('code');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->longText('addressLiving');
            $table->string('codeLiving');
            $table->string('districtLiving');
            $table->string('cityLiving');
            $table->string('provinceLiving');
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
        Schema::dropIfExists('biodatas');
    }
};
