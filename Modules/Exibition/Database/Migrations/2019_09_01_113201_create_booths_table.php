<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('detail');
            $table->integer('user_id')->default(0);
            $table->foreign('user_id')
                ->references('users')->on('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('exibition_id');
            $table->foreign('exibition_id')
                ->references('exibitions')->on('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->boolean('confrim_order')->default(false);
            $table->text('order_info')->nullable();
            $table->boolean('reserved')->default(false);
            $table->integer('area')->default(0);
            $table->timestamp('time_order')->nullable();
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
        Schema::dropIfExists('booths');
    }
}
