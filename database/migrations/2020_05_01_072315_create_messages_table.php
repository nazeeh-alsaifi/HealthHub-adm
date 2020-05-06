<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('sent_by')->unsigned();
            $table->integer('received_by')->unsigned();
            $table->text('subject');
            $table->mediumText('body');
            $table->boolean('status');
            $table->string('phone_num')->default('-1');
            $table->string('sex')->default('male');
            $table->integer('age')->default(-1);
            $table->integer('reply_on')->unsigned()->default(0);
            $table->index('sent_by');
            $table->index('received_by');
            $table->index('reply_on');
            $table->foreign('sent_by')->references('id')->on('users');
            $table->foreign('received_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
