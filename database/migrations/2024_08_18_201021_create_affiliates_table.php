<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('affiliate', 50);
            $table->timestamps();
        });

        Schema::create('affiliate_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('affiliate_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->timestamps();

            $table->foreign('affiliate_id')->references('id')->on('affiliates');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_products');
        Schema::dropIfExists('affiliates');
    }
};
