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
            $table->increments('id');
            $table->string('productname', 150);
            $table->string('slug', 180)->unique();
            $table->unsignedInteger('price');
            $table->unsignedInteger('pricediscount')->nullable();
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedInteger('brandid')->nullable();
            $table->unsignedInteger('cateid');
            $table->timestamps();

            $table->foreign('brandid')
                ->references('id')
                ->on('brands')
                ->nullOnDelete();

            $table->foreign('cateid')
                ->references('cateid')
                ->on('categories')
                ->restrictOnDelete();
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
