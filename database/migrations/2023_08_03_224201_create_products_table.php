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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id')->constrained();
            $table->unsignedBigInteger('sub_category_id')->constrained();
            $table->unsignedBigInteger('brand_id')->constrained();
            $table->string('name');
            $table->string('slug');
            $table->decimal('price')->default(0);
            $table->decimal('sale_price')->default(0);
            $table->integer('qty')->default(0);
            $table->string('SKU')->default('S001');
            $table->string('image')->default('product.jpg');
            $table->string('gallery')->nullable();
            $table->enum('stock',['instock','outofstock'])->default('outofstock');
            $table->enum('status',['approved','pending'])->default('pending');
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
