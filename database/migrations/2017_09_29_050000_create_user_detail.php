<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        \Schema::create('user_details', function (Blueprint $blueprint) {
            $blueprint->increments("id");
            $blueprint->integer('user_id')->unsigned();
            $blueprint->text('profile_pic')->nullable();
            $blueprint->text('cover_pic')->nullable();
            $blueprint->text('about_me')->nullable();
            $blueprint->text('phone');
            $blueprint->text('whatsapp');
            $blueprint->text('others')->nullable();
            $blueprint->timestamps();

            $blueprint->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists("user_details");
    }
}
