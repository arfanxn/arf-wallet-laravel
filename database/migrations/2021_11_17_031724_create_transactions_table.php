<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // $table->foreignId("from_user_id")->constrained("users", "id");
            $table->foreignId("from_wallet_id")->constrained("wallets", "id");
            // $table->foreignId("to_user_id")->constrained("users", "id");
            $table->foreignId("to_wallet_id")->constrained("wallets", "id");
            $table->unsignedBigInteger("discount_id")->nullable();
            $table->unsignedBigInteger("amount");
            $table->unsignedBigInteger("charge")->nullable();
            $table->string("title");
            $table->string("description", 1000)->nullable();
            $table->boolean("status");
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
        Schema::dropIfExists('transactions');
    }
}
