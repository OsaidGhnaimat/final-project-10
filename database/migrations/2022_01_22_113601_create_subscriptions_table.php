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
//            // $table->foreignId('consultation_id')->nullable()
 //           $table->foreignId('user_id')->constrained();
            $table->increments('id');
            $table->unsignedBigInteger('consultation_id');
            $table->unsignedBigInteger('user_id');
            // $table->integer('consultation_id')->unsigned();
            $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
            // $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
