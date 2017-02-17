<?php

use Illuminate\Database\Seeder;

class LawyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lawyer::class, 30)->create();
    }
}
