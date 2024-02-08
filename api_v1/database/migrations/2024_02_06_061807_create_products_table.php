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
            $table->string('name')->nullable(false);
            $table->string('brand')->nullable();
            $table->float('price')->nullable(false);
            $table->float('discount')->nullable();
            $table->text('description')->nullable();
            $table->float('average_review')->nullable();
            $table->unsignedBigInteger('category_id')->default(2);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->text('image')->nullable();
            $table->timestamps();
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
