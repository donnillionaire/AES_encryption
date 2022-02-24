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
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longtext('email');
            $table->string('github');
            $table->string('twitter');
            $table->string('location');
            $table->string('latest_article_published');
            $table->timestamps();
        });


        // Schema::create('credit_card', function (Blueprint $table) {
        //     $table->increments('card_info_id');
        //     $table->string('holder_name');
        //     $table->longtext('card_type');
        //     $table->string('card_number');
        //     $table->string('cvc');
        //     $table->string('postal_code');
        //     $table->string('expiration_date');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
};
