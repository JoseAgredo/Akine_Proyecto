<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->unsignedBigInteger('Comprador')->nullable();
            $table->foreign('Comprador')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('Producto')->nullable();
            $table->foreign('Producto')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('Cantidad')->length(5);
            $table->bigInteger('Precio')->length(10);
            $table->bigInteger('Total')->length(10);
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
        Schema::dropIfExists('sales');
    }
}
