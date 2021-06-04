<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livreurs', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('phone');
            $table->text('address');
            $table->text('zone');
            $table->text('pricing');
            $table->foreignId('deliveries_id')->nullable()->constrained('deliveries')->onDelete('cascade');

            $table->integer('deliveries_id')->unsigned();
            $table->foreign('deliveries_id')->references('id')->on('deliveries_id');
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
        Schema::dropIfExists('livreurs');
    }
}
