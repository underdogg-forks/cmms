<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriorityTableSeeder extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */

public function run()
{
    factory(App\Priority::class, 10)->create();
}

}
