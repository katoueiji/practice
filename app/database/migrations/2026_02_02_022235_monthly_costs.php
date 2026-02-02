<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonthlyCosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //月次費用
       Schema::create('monthly_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->constrained()->onDelete('cascade');
            $table->string('month'); // YYYY-MM
            $table->decimal('labor_cost', 10, 2)->default(0); // 人件費
            $table->decimal('fixed_cost', 10, 2)->default(0); // 固定費
            $table->timestamps();

            $table->unique(['store_id', 'month']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_costs');
    }
}
