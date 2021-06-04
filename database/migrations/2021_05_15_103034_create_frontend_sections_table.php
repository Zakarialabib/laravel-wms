<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('offer_title')->nullable();
            $table->string('offer_subtitle')->nullable();
            $table->string('offer_image')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_subtitle')->nullable();
            $table->string('service_image')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_subtitle')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_subtitle')->nullable();
            $table->string('blog_image')->nullable();
            $table->string('section_type')->nullable();
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
        Schema::dropIfExists('frontend_sections');
    }
}
