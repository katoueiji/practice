<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //メニュー
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('recipe_id')->constrained()->onDelete('cascade');
            $table->decimal('price', 10, 2); // 販売価格
            $table->decimal('cost_rate', 5, 2)->nullable(); // 原価率（%）
            $table->decimal('gross_profit', 10, 2)->nullable(); // 粗利
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
        Schema::dropIfExists('menus');
    }
}
