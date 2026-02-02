<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //材料
        Schema::create('materials', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedBigInteger('store_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->decimal('unit_price', 10, 2); // 単価
            $table->string('unit'); // g, ml, 個 など
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
        Schema::dropIfExists('materials');
    }
}
