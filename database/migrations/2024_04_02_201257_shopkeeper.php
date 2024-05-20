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
        Schema::create('shopkeeper',function(Blueprint $table){
            $table->id();
            $table->string('Username');
            $table->string('Password');
            $table->timestamps();

        });

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('productCode');
            $table->string('productName');
            $table->timestamps();

        });

        Schema::create('productIn', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->index();
            $table->timestamp('DateTime');
            $table->integer('Quantity');
            $table->integer('UnitPrice');
            $table->integer('TotalPrice');
            $table->timestamps();

        });

        Schema::create('productOut', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->index();
            $table->timestamp('DateTime');
            $table->integer('Quantity');
            $table->integer('UnitPrice');
            $table->integer('TotalPrice');
            $table->timestamps();

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopkeeper');
        Schema::dropIfExists('product');
        Schema::dropIfExists('productIn');
        Schema::dropIfExists('productOut');

    }
};
