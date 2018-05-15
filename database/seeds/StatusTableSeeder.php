<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */

public function run()
{
    factory(App\Status::class, 10)->create();
}

}
