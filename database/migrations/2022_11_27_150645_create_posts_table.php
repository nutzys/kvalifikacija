<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('price')->nullable();
            $table->foreignId('type_id')->references('id')->on('types');
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->integer('view_count')->default(0);
            $table->integer('applied_count')->default(0);
            $table->boolean('is_verified')->default(0);
            $table->boolean('is_reported')->default(0);
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
        Schema::dropIfExists('posts');
    }
};
