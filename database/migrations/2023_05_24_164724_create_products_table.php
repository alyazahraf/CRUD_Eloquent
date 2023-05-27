<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Products;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->integer('quantity');
            $table->string('description');
            $table->timestamps();
        });

        // Insert initial data using Eloquent
        $products = new Products();
        $products->name = 'Sample Product';
        $products->price = 10.99;
        $products->quantity = 100;
        $products->description = 'Sample product description';
        $products->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
