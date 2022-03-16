<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            // $table->foreignId('consultation_id')->constrained();
            // $table->foreignId('user_id')->constrained();
            // $table->foreignId('expert_id')->constrained();
            // $table->integer('user_id')->nullable();
            $table->timestamps();
            $table->foreignId('consultation_id')->unsigned()->references('id')->on('consultations')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('expert_id')->unsigned()->references('id')->on('experts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
