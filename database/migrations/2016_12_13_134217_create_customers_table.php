<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('stripe_active')->default(0);
            $table->string('stripe_id')->nullable();
            $table->string('stripe_plan', 25)->nullable();
            $table->string('last_four', 4)->nullable();;
            $table->timestamp('subscription_ends_at')->nullable();
            $table->double('credit')->nullable();
            $table->timestamps();
        });
        Schema::table('bookings', function(Blueprint $table){
            $table->integer('customer_id')->after('user_id');
        });
        Schema::table('listings', function(Blueprint $table){
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
