<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->string('src')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table
                  ->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table
                  ->foreign('author_id')
                  ->references('id')
                  ->on('authors')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table
                  ->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table
                 ->string('status')->nullable();     

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
        Schema::dropIfExists('books');
    }
}
