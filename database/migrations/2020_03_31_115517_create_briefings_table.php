<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBriefingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefings', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('PA');
            $table->string('DA');
            $table->string('spam');
            $table->string('visitors')->nullable();
            $table->string('price');
            $table->string('blog')->nullable();
            $table->string('link')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('briefings');
    }
}
