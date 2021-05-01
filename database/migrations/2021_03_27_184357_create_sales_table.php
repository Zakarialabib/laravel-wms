<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
		$table->id();
        $table->string('sale_number');
		$table->integer('product_id');
        $table->enum('status', ['pending','processing','completed','decline'])->default('pending');		$table->integer('quantity');
        $table->boolean('is_paid')->default(false);
        $table->float('grand_total');
        $table->integer('item_count');
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }

}