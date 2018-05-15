<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractorTableSeeder extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */

public function run()
{
    factory(App\Contractor::class, 50)->create();
}


}
