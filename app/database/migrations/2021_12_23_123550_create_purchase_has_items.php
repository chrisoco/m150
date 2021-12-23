<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHasItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_has_items', function (Blueprint $table) {

            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('item_id');

            $table->integer('quantity');

            $table->timestamps();

            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('item_id')->references('id')->on('items');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases_has_items');
    }
}
