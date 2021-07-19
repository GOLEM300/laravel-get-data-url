<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StockItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_item', function (Blueprint $table) {
            $table->increments('id');
            $table->date('lastChangeDate');
            $table->string('supplierArticle');
            $table->string('techSize');
            $table->string('barcode');
            $table->integer('quantity');
            $table->boolean('isSupply');
            $table->boolean('isRealization');
            $table->integer('quantityFull');
            $table->integer('quantityNotInOrders');
            $table->string('warehouseName');
            $table->integer('inWayToClient');
            $table->integer('inWayFromClient');
            $table->integer('nmId');
            $table->string('subject');
            $table->string('category');
            $table->integer('daysOnSite');
            $table->string('brand');
            $table->string('SCCode');
            $table->integer('Price');
            $table->integer('Discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_item');
    }
}
