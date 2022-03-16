<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            // $table->foreignId('consultation_id')->constrained();
            $table->foreignId('consultation_id')->nullable()
            ->unsigned()
            ->references('id')
            ->on('consultations')
            ->onDelete('cascade');

            // $table->foreignId('user_id')->constrained();

            $table->foreignId('user_id')->nullable()
            ->unsigned()
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            
            $table->string('total_price');
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
        Schema::dropIfExists('subscriptions');
    }
}
