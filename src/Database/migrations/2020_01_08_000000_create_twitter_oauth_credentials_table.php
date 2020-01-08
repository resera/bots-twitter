<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwitterOauthCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_oauth_credentials_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('consumer_key');
            $table->string('consumer_secret');
            $table->string('access_token');
            $table->string('access_token_secret');
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
        Schema::dropIfExists('twitter_oauth_credentials_table');
    }
}
