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
        Schema::create('posts', function (Blueprint $table) {
            // $table->id('post_id');
            // $table->string('name',50);
            // $table->text('title')->nullable();  //required
            // $table->longText('description');
            // $table->boolean('status')->default(false);
            // // $table->bigIncrements('user_count');  //auto increment but not primary key
            // $table->timestamps();
            // // $table->timestamp('created_at');
            // // $table->timestamp('updated_at');

            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('location');
            $table->timestamp('today_date')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
