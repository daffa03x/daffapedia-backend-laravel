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
            $table->unsignedBigInteger('id_category');
            $table->string('name_product')->nullable(false);
            $table->string('slug')->unique();
            $table->text('description')->nullable(false);
            $table->bigInteger('price')->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->timestamps();

            $table->foreign('id_category')
                ->references('id')
                ->on('category_products')
                ->onDelete('cascade');
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
