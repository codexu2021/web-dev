<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Comments', function (Blueprint $table){
            $table->UnsignedBigInteger('id');
            $table->unsignedBigInteger('post_id');
            $table->char('name');
            $table->text('contents');
            $table->timestamp('comment_date');
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
    }
}
