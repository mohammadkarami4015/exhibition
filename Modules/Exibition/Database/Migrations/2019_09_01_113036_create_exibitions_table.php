<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExibitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exibitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('detail');
            $table->date('start_reg');
            $table->date('end_reg');
            $table->date('start_holding');
            $table->date('end_holding');
            $table->integer('booth_count')->default(0);
            $table->boolean('is_show')->default(false);
            $table->text('province');
            $table->text('city');
            $table->text('address');
            $table->string('image');
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
        Schema::dropIfExists('exibitions');
    }
}
