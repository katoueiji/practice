<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'store_id' => 1,
            'name' => '大根',
            'unit_price' => 5000,
            'unit' => 100,
        ]);
    }
}
