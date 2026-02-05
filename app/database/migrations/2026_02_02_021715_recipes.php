<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //レシピ
        Schema::create('recipes', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedBigInteger('store_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->decimal('cost', 10, 2)->default(0); // 原価（自動計算結果）
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
        Schema::dropIfExists('recipes');
    }
}