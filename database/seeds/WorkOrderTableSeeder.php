<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkOrderTableSeeder extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */

public function run()
{
    factory(App\WorkOrder::class, 100)->create();
}

}
