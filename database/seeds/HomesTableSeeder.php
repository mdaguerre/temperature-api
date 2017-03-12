<?php

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'name' => 'Montevideo'
        ]);

        DB::table('homes')->insert([
            'name' => 'Punta Del Este'
        ]);
    }
}
