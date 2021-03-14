<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users_permissions', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('permission_id');
        
            $table->foreignid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignid('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        
            $table->primary(['user_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permissions');
    }
}

