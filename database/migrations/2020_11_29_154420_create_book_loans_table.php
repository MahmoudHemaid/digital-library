<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_loans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_out')->useCurrent();
            $table->timestamp('due_date');
            $table->timestamp('date_in')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger("book_id");
            $table->timestamps();
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_loans');
    }
}
