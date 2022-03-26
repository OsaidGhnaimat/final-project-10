<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('consultation_name');
            $table->string('consultation_img')->nullable();
            $table->string('title');
            $table->string('price');
            $table->text('description');
            // $table->foreignId('user_id')->constrained();
            $table->foreignId('expert_id')
                ->unsigned()
                ->references('id')
                ->on('experts')
                ->onDelete('cascade');
            $table->foreignId('category_id')
                ->unsigned()
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('consultations');
    }
}
